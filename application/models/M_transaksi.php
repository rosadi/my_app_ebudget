<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

    // INCOME= =====================================================================================

    public function set_transaksi_income(){
        $income       = htmlspecialchars($this->input->POST('income'));
        $id_account   = htmlspecialchars($this->input->POST('id_account'));
        $id_category  = htmlspecialchars($this->input->POST('id_category'));
        $keterangan   = htmlspecialchars($this->input->POST('keterangan'));

        $data = array(
            'income'       => $income,
            'expanse'      => '0',
            'id_account'   => $id_account,
            'id_category'  => $id_category,
            'qty'          => 0,
            'keterangan'   => $keterangan,
            'status'       => '0'
            );

        return $this->db->insert('transaksi_detail', $data);
    }

    public function get_transaksi_income(){
        $query = "SELECT trx_d.t_detail_id, trx_d.income, tbl_cat.category_name, tbl_a.account_name,     
        trx_d.status, trx_d.keterangan
        FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
        WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category 
        && INCOME && trx_d.status = '0'";

        return $this->db->query($query)->result_array();
    }

    public function get_total_income(){
        $query = "SELECT SUM(income) AS total FROM transaksi_detail WHERE STATUS = '0'";
        return $this->db->query($query)->row_array();
    }

    public function delete_transaksi($t_detail_id){
        $this->db->where('t_detail_id', $t_detail_id);
        $this->db->delete('transaksi_detail');
    }

    public function selesai_transaksi($data){
        $this->db->insert('transaksi', $data);
        # mendapatkan id transaksi terakhir
        $last_id = $this->db->query("SELECT id_transaksi FROM transaksi ORDER BY id_transaksi DESC")->row_array();
        # update nilai id_transaksi di table transaksi_detail
        $this->db->query("UPDATE transaksi_detail SET id_transaksi = ".$last_id['id_transaksi']." WHERE status = '0'");
        # update inlai status 0 menjadi 1
        $this->db->query("UPDATE transaksi_detail SET status = '1' WHERE status = '0'");
    }

    # menampilkan data income keseluruhan dashboard->data all
    public function get_data_all_income(){
        $query = "SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.income) AS income
        FROM transaksi_detail AS trx_d, transaksi AS trx
        WHERE trx_d.id_transaksi = trx.id_transaksi AND INCOME
        GROUP BY trx_d.id_transaksi";

        return $this->db->query($query)->result_array();
    }

    # untuk di tampilkan di halaman dashboard tampil hanya awal bulan dan akhir bulan
    public function get_income_report_1($tgl_pertama, $tgl_terakhir){
        $query = "SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.income) AS total
        FROM transaksi_detail AS trx_d, transaksi AS trx
        WHERE trx_d.id_transaksi = trx.id_transaksi AND 
        trx.tanggal_transaksi BETWEEN '$tgl_pertama' AND '$tgl_terakhir' AND INCOME
        GROUP BY trx_d.id_transaksi";

        return $this->db->query($query)->result_array();
    }

    // EXPANSE =====================================================================================

    public function set_transaksi_expanse(){
        $expanse      = htmlspecialchars( $this->input->POST('expanse'));
        $qty          = htmlspecialchars($this->input->POST('qty'));
        $id_account   = htmlspecialchars($this->input->POST('id_account'));
        $id_category  = htmlspecialchars($this->input->POST('id_category'));
        $keterangan   = htmlspecialchars($this->input->POST('keterangan'));

        $data = array(
            'income'       => '0',
            'expanse'      => $expanse,
            'id_account'   => $id_account,
            'id_category'  => $id_category,
            'qty'          => $qty,
            'keterangan'   => $keterangan,
            'id_transaksi' => '0',
            'status'       => '0'
            );

        return $this->db->insert('transaksi_detail', $data);
    }

    public function get_transaksi_expanse(){
        $query = "SELECT trx_d.t_detail_id, trx_d.expanse, tbl_cat.category_name, tbl_a.account_name,  
        trx_d.status, trx_d.keterangan, trx_d.qty
        FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
        WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category 
        && EXPANSE && trx_d.status = '0'";

        return $this->db->query($query)->result_array();
    }

    # menampilkan data expanse keseluruhan dashboard->data all
    public function get_data_all_expanse(){
        $query = "SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.expanse * trx_d.qty) AS expanse
        FROM transaksi_detail AS trx_d, transaksi AS trx
        WHERE trx_d.id_transaksi = trx.id_transaksi AND EXPANSE
        GROUP BY trx_d.id_transaksi        ";

        return $this->db->query($query)->result_array();
    }

    public function get_total_expanse(){
        $query = "SELECT SUM(expanse * qty) AS total FROM transaksi_detail WHERE STATUS = '0'";
        return $this->db->query($query)->row_array();
    }

    # untuk di tampilkan di halaman dashboard tampil hanya awal bulan dan akhir bulan
    public function get_expanse_report_1($tgl_pertama, $tgl_terakhir){
        $query = "SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.expanse * trx_d.qty) AS total
                FROM transaksi_detail AS trx_d, transaksi AS trx
                WHERE trx_d.id_transaksi = trx.id_transaksi AND
                trx.tanggal_transaksi BETWEEN '$tgl_pertama' AND '$tgl_terakhir' AND EXPANSE
                GROUP BY trx_d.id_transaksi";

        return $this->db->query($query)->result_array();
    }

    // REPORT ======================================================================================
    // Data di tampilkan di dashboard
    public function report_sel_income(){
        $query = "SELECT SUM(income) AS total FROM transaksi_detail";
        return $this->db->query($query)->row_array();
    }
    // Data di tampilkan di dashboard
    public function report_sel_expanse(){
        $query = "SELECT SUM(expanse * qty) AS total FROM transaksi_detail";
        return $this->db->query($query)->row_array();
    }

    public function transaksi_selesih_inc_exp(){
        $query = "SELECT SUM(income - (expanse * qty)) AS total_selisih FROM transaksi_detail ";
        return $this->db->query($query)->row_array();
    }

    ///////////////////////////////////////////////////
    // menampilkan transaksi detail dengan transaksi //
    ///////////////////////////////////////////////////

    public function get_inc_id($id_transaksi){
        # query lama yang error karena tanggal tidak benar
        // $query = "SELECT trx_d.id_transaksi, trx.tanggal_transaksi, tbl_a.account_name, tbl_cat.category_name, trx_d.keterangan, trx_d.income
        //     FROM transaksi_detail AS trx_d, transaksi AS trx, tbl_category AS tbl_cat, tbl_account AS tbl_a
        //     WHERE trx_d.id_category = tbl_cat.id_category AND trx_d.id_transaksi = '$id_transaksi'
        //     GROUP BY trx_d.t_detail_id";
        $query = "SELECT trx.id_transaksi, trx.tanggal_transaksi, tbl_acc.account_name, tbl_cat.category_name, trx_det.keterangan, trx_det.keterangan, trx_det.income, trx_det.qty
            FROM transaksi trx, tbl_account tbl_acc, tbl_category tbl_cat, transaksi_detail trx_det
            WHERE
            trx.id_transaksi = trx_det.id_transaksi
            AND tbl_acc.id_account = trx_det.id_account
            AND tbl_cat.id_category = trx_det.id_category
            AND trx.id_transaksi = '$id_transaksi'";

        return $this->db->query($query)->result_array();
    }

    public function get_exp_id($id_transaksi){
        # query lama yang error karena tanggal tidak benar
        // $query = "SELECT trx_d.id_transaksi, trx.tanggal_transaksi, tbl_a.account_name, tbl_cat.category_name, trx_d.keterangan, trx_d.expanse, trx_d.qty
        //     FROM transaksi_detail AS trx_d, transaksi AS trx, tbl_category AS tbl_cat, tbl_account AS tbl_a
        //     WHERE trx_d.id_category = tbl_cat.id_category AND trx_d.id_transaksi = '$id_transaksi'
        //     GROUP BY trx_d.t_detail_id";

        $query = "SELECT trx.id_transaksi, trx.tanggal_transaksi, tbl_acc.account_name, tbl_cat.category_name, trx_det.keterangan, trx_det.keterangan, trx_det.expanse, trx_det.qty
            FROM transaksi trx, tbl_account tbl_acc, tbl_category tbl_cat, transaksi_detail trx_det
            WHERE
            trx.id_transaksi = trx_det.id_transaksi
            AND tbl_acc.id_account = trx_det.id_account
            AND tbl_cat.id_category = trx_det.id_category
            AND trx.id_transaksi = '$id_transaksi'";

        return $this->db->query($query)->result_array();
    }

}

/* End of file m_transaksi.php */
/* Location: ./application/models/m_transaksi.php */