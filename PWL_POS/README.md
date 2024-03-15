# JOBSHEET 04 - MODEL dan ELOQUENT ORM

### Praktikum 1 - $fillable:
1. Hasil langkah 1 & 2 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/9a0d642d-2f98-477c-85bf-65b46aa1573f)

2. Hasil langkah 4 & 5 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/c3a55084-1724-4f39-9930-1056c9242257)

### Praktikum 2.1 – Retrieving Single Models
1. Hasil langkah 1 & 2 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/661db0a0-1cb5-4860-b1aa-cbb91ed5cf9f)

2. Hasil langkah 4 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/c5b0488e-0477-409f-8425-caa36c67a0ab)

3. Hasil langkah 6 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/6af05f88-54ac-4952-a796-755bc9cbfa69)

4. Hasil langkah 8 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/d30d8132-546e-486d-9b54-c1c28a988c53)

5. Hasil langkah 10 :
   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/fcffcb88-3ec5-443b-86e6-5feb9bd6cd49)

   terjadi 404 not found karena id 20 tidak ada.

### Praktikum 2.2 - Not Found Exception
1. Hasil langkah 1 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/77668596-b629-4849-814e-f2eb304d26bd)

3. Hasil langkah 3 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/545be8a3-f560-48b7-b06a-a297ca0c0407)

   terjadi not found karena 'manager9' tidak ada

### Praktikum 2.3 - Retreiving Aggregrates
1. Hasil langkah 1 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/29f42473-62c7-4511-92a9-f5183e184b52)

2. Hasil langkah 3 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/230416bc-1306-4514-9a36-96828bff7bf7)

### Praktikum 2.4 - Retreiving or Creating Models
1. Hasil langkah 1 & 2 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/d2947e0c-c3d1-4937-bbf6-108898c3cedb)

2. Hasil langkah 4 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/22fba0fd-018a-47ea-8d59-252b08e95c11)
   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/cb42d617-52e6-42a5-9769-9e07bf479bfc)

4. Hasil langkah 6 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/1b334617-5c6b-42ed-b7f1-0763d8395c85)

5. Hasil langkah 8 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/7a4f00e1-6ca8-4966-a0a6-84ea43c917e5)
   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/66d8e899-1138-434d-8b9e-84ec39284bc9)
   tidak ada perubahan karena belum tersimpan di dalam database

7. Hasil langkah 10 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/32485a5c-8bdc-4c7c-bd38-99c2566466ad)
   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/eafad6ac-ee5e-4b39-bf48-d1b73b0a5173)

   terjadi perubahan dengan bertambahnya user di database karena sudah tersimpan

### Praktikum 2.5 - Attribute Changes
1. Hasil langkah 1 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/c4a8333f-c72e-4155-ab04-7f72d255ea48)

   Program menghasilkan false karena model telah disimpan. Namun, ketika dicek dengan isDirty() untuk melihat apakah data telah diubah,
   program mengembalikan nilai true karena belum ada perubahan yang dilakukan.

3. Hasil langkah 3 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/f8ac1c4e-b61a-4ab7-90d6-393f521bfa21)

   Program akan menghasilkan nilai true karena model telah mengalami perubahan. Jika menggunakan bantuan wasChanged(),
   walaupun sudah disimpan dengan save(), jika data memang berbeda dari yang aslinya, maka akan terdeteksi sebagai perubahan.

### Praktikum 2.6 - Create, Read, Update, Delete (CRUD)
1. Hasil langkah 1 & 2 :


   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/a966e366-c965-4bc8-8663-6120172e9088)

   menambah button tambah user, ubah, hapus

3. Hasil langkah 4-6 :


   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/582db425-6a36-4acb-8ab5-84cd1822a8f0)

   jika diklik tambah user maka akan pergi ke halaman tambah user

5. Hasil langkah 8 & 9 :


   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/1cb7cf90-7d8a-4057-a676-8256f49aa338)

   user akan bertambah sesuai dengan isi form

6. Hasil langkah 11-13 :

   ![image](https://github.com/dhoedho1103/Pemrograman-Web-Lanjut/assets/160827276/d6ddb6d2-c427-4d21-81b9-d178fc213cf5)

   menampilkan halaman ubah

7. 








