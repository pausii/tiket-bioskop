# Tiket Bioskop

Aplikasi pemesanan tiket bioskop berbasis web. 

## Requirements
- Docker
- PHP 8.0+
- MySQL 5.7+
- Apache Web Server

## Installation
- Clone Repository ini
```bash
git clone https://github.com/pausii/tiket-bioskop
```
- pergi ke folder tiket-bioskop
```bash
cd tiket-bioskop
```

- buat network app-network
```sh
docker network create app-network
```

- jalankan mariadb container
```sh
docker run \
    --detach \
    --network app-network \
    --name app-mariadb \
    --env MARIADB_USER=app_user \
    --env MARIADB_DATABASE=app_db \
    --env MARIADB_PASSWORD=app_pass \
    --env MARIADB_ROOT_PASSWORD=app_root_pass  \
    mariadb:latest
```

- import database
```sh
docker exec -i app-mariadb mysql -u app_user -papp_pass app_db < ./database/app.sql
```

- build docker image
```sh
sudo docker build -t ticket_bioskop_app .
```

- run docker container
```sh
sudo docker run \
    --detach \
    --network app-network \
    -p 80:80 ticket_bioskop_app
```

- Sekarang buka browser dan ketikkan alamat http://localhost

- *Selesai.*
## Features
<details open>
    <summary>Aplikasi ini memiliki beberapa fitur diantaranya yaitu: </summary>

- Role Admin:
    - Login
    - Statistik Web
    - Tambah film
    - Edit film
    - Hapus film
    - Lihat daftar film
    - Tambah jadwal film
    - Hapus jadwal film
    - Tambah user admin
    - Edit user admin
    - Hapus user admin
    - Logout

- Role Customer:
    - Daftar
    - Login
    - Lihat daftar film
    - Lihat jadwal film
    - Pilih jadwal film
    - Pilih bangku
    - Pilih jumlah tiket
    - Checkout
    - Logout
</details>

## Screenshot
<details>
    <summary>Screenshot 1</summary>

![](https://i.ibb.co/3h5mB1Q/Screenshot-2022-09-29-15-22-54.png")
</details>
<details>
    <summary>Screenshot 2</summary>

![](https://i.ibb.co/1sMFJS0/Screenshot-2022-09-29-15-24-42.png)

</details>
<details>
<summary>Screenshot 3</summary>

![](https://i.ibb.co/dLSsTt0/Screenshot-2022-09-29-15-23-51.png)
</details>
<details>
    <summary>Screenshot 4</summary>

![](https://i.ibb.co/pQKz63q/Screenshot-2022-09-29-15-23-39.png")
</details>
<details>
    <summary>Screenshot 5</summary>

![](https://i.ibb.co/3fb7B1P/Screenshot-2022-09-29-15-23-07.png")
</details>
<details>
    <summary>Screenshot 6</summary>

![](https://i.ibb.co/4FSmW3r/Screenshot-2022-09-29-15-25-00.png")
</details>
<details>
    <summary>Screenshot 7</summary>

![](https://i.ibb.co/98cKJN1/Screenshot-2022-09-29-15-22-46.png")
</details>

## License
This app under MIT License.

## Thanks
- *Ankit Hingarajiya* For DeskApp Template

## Coders
- Ahmad Pausi
- Eryc Ryantona

## Donation
- PerfectMoney: U24240936
- Bitcoin: bc1qu6uahgaep4wkqsxy22rjghe0p7zw58am62wjj0
- Ethereum: 0x0b2A29325524cd61e51A351fCCbc76EA64616653