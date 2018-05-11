USE db_keuangan

# menampilkan data income saja
SELECT trx_d.id_transaksi, trx.tanggal_transaksi, trx_d.income, trx_d.keterangan, trx_d.status
FROM transaksi_detail AS trx_d, transaksi AS trx
WHERE trx.id_transaksi = trx_d.id_transaksi && trx_d.income AND trx_d.status = '0'

SELECT trx_d.income, tbl_cat.category_name, tbl_a.account_name, trx_d.status
FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category && INCOME && trx_d.status = '0'


SELECT trx_d.t_detail_id, trx_d.income, tbl_cat.category_name, tbl_a.account_name, trx_d.status, trx_d.keterangan
FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category 
&& INCOME && trx_d.status = '0'

# query penting
# menampilkan data transaksi income dari table transaksi_income, tbl_category, dan tbl_account
# belum beres terakhir mengerjakan tanggal 17 jan 2018 jam 6:27
# lanjut lagi 17 jan 2017 12:57 
SELECT trx_d.income, trx.tanggal_transaksi, tbl_cat.category_name, tbl_a.account_name, trx.id_transaksi
FROM transaksi_detail AS trx_d, transaksi AS trx, tbl_category AS tbl_cat, tbl_account AS tbl_a
WHERE trx.id_transaksi =  trx_d.id_transaksi AND 
      trx_d.id_category = tbl_cat.id_category AND 
      trx_d.id_account = tbl_a.id_account 
      AND trx.tanggal_transaksi BETWEEN '2018-01-01' AND '2018-01-31'
      
# jam 1:30 mencoba untuk memperbaiki query di bawah ini sudah hampir benar haha
SELECT trx.id_transaksi, trx.tanggal_transaksi, tbl_cat.category_name, tbl_a.account_name, SUM(trx_d.income) AS income
FROM transaksi AS trx, transaksi_detail AS trx_d, tbl_account AS tbl_a, tbl_category AS tbl_cat
WHERE trx.id_transaksi = trx_d.id_transaksi AND 
	tbl_a.id_account = tbl_a.id_account AND
	tbl_cat.id_category = tbl_cat.id_category AND
	trx.tanggal_transaksi BETWEEN '2018-01-01' AND '2018-01-31'
GROUP BY trx_d.id_transaksi

# bongkar query lagi jam 1:53
# query ini sudah benar menampilkan data
# query ini di pake untuk menamplkan hasil transaksi di halaman dashboard
SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.income) AS total_sum
FROM transaksi_detail AS trx_d, transaksi AS trx
WHERE trx_d.id_transaksi = trx.id_transaksi AND
      trx.tanggal_transaksi BETWEEN '2018-01-01' AND '2018-01-31'
GROUP BY trx_d.id_transaksi


# menampilkan datan expanse saja
SELECT trx_d.id_transaksi, trx.tanggal_transaksi, trx_d.expanse, trx_d.qty, trx_d.keterangan
FROM transaksi AS trx, transaksi_detail AS trx_d
WHERE trx.id_transaksi = trx_d.id_transaksi && trx_d.expanse

SELECT * FROM transaksi_detail

SELECT trx_d.t_detail_id, trx_d.expanse, tbl_cat.category_name, tbl_a.account_name
        trx_d.status, trx_d.keterangan
        FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
        WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category 
        && EXPANSE && trx_d.status = '0'
        
SELECT trx_d.t_detail_id, trx_d.expanse, tbl_cat.category_name, tbl_a.account_name,  
        trx_d.status, trx_d.keterangan
        FROM transaksi_detail AS trx_d, tbl_category AS tbl_cat, tbl_account AS tbl_a
        WHERE trx_d.id_account = tbl_a.id_account && trx_d.id_category = tbl_cat.id_category 
        && EXPANSE && trx_d.status = '0'   
        
SELECT trx_d.id_transaksi , trx.tanggal_transaksi, SUM(trx_d.expanse) AS total_sum
FROM transaksi_detail AS trx_d, transaksi AS trx
WHERE trx_d.id_transaksi = trx.id_transaksi AND
      trx.tanggal_transaksi BETWEEN '2018-01-01' AND '2018-01-31' AND EXPANSE
GROUP BY trx_d.id_transaksi           

# menampilkan transaksi detail jam 11:43
# sudah benar, benar pada jam 9:54 tgl 18 jan 2018
SELECT trx_d.id_transaksi, trx.tanggal_transaksi, tbl_a.account_name, tbl_cat.category_name, trx_d.keterangan, trx_d.income
            FROM transaksi_detail AS trx_d, transaksi AS trx, tbl_category AS tbl_cat, tbl_account AS tbl_a
            WHERE trx_d.id_category = tbl_cat.id_category AND trx_d.id_transaksi = 5
            GROUP BY trx_d.t_detail_id
            
# menampilkan data transaksi detail dibuat jam 10:14 tgl 18 jan 2018
# ini detail untuk detial expanse yah
SELECT trx_d.id_transaksi, trx.tanggal_transaksi, tbl_a.account_name, tbl_cat.category_name, trx_d.keterangan, trx_d.expanse, trx_d.qty, SUM(trx_d.expanse) AS total
            FROM transaksi_detail AS trx_d, transaksi AS trx, tbl_category AS tbl_cat, tbl_account AS tbl_a
            WHERE trx_d.id_category = tbl_cat.id_category AND trx_d.id_transaksi = 6
            GROUP BY trx_d.t_detail_id
            
           

# untuk menampilkan data keseluruhan income
SELECT trx_d.id_transaksi , trx.tanggal_transaksi, trx_d.income SUM(trx_d.income) AS total
        FROM transaksi_detail AS trx_d, transaksi AS trx
        WHERE trx_d.id_transaksi = trx.id_transaksi AND INCOME
        GROUP BY trx_d.id_transaksi           