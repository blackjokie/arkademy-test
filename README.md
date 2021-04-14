# arkademy-test
Repository ini merupakan bagian dari tugas yang dibarikan oleh arkademy

Requirement:
1. docker >= 20.10.5
2. docker-compose >= 1.28.6

Installation:
1. Buka file docker-compose.yml, ubah value MYSQL_ROOT_PASSWORD sesuai dengan yang diinginkan. 
2. Buka file public_html/config.php, ubah value $databasePassword sesuai dengan yang diinginkan.
3. pada root folder, jalankan perintah docker-compose build && docker-compose up -d.
4. Tunggu hingga proses selesai.
5. Buka http://localhost:8080 atau http://127.0.0.1:8080 pada browser.

Screenshot:

![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/add-data.png)
![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/edit-data.png)
![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/homepage-after-add.png)
![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/homepage-after-delete.png)
![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/homepage-after-edit.png)
![Alt text](https://raw.githubusercontent.com/blackjokie/arkademy-test/main/screenshot/homepage.png)