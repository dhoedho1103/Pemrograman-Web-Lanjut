<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KTP</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="grid">
  <div class="ktp-wrapper rounded-xl place-self-center px-10 py-3 border-2">
    <div class="header-wrapper grid place-items-center">
      <div class="province">PROVINSI JAWA TIMUR</div>
      <div class="province">KABUPATEN SUMENEP</div>
    </div>
    <div class="body-wrapper mt-2 flex gap-[2rem]">
      <div class="right-content">
        <table>
          <tbody>
            <tr>
              <td class="w-48 flex justify-between font-semibold text-lg mb-2">
                NIK <span>:</span>
              </td>
              <td class="ps-1 font-semibold text-lg">352901XXXXXXXXXXX</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Nama <span>:</span>
              </td>
              <td class="ps-1 text-sm uppercase">ACHMAD RIDLA SHOBRIY</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Tempat/Tgl Lahir <span>:</span>
              </td>
              <td class="ps-1 text-sm">PAMEKASAN, 11-03-2003</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Jenis Kelamin <span>:</span>
              </td>
              <td class="ps-1 text-sm">LAKI-LAKI</td>
              <td class="ps-1 text-sm">Gol. Darah :</td>
              <td class="ps-1 text-sm">-</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Alamat <span>:</span>
              </td>
              <td class="ps-1 text-sm">JL. KH. SAJAD 51-24</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                <span class="ms-9">RT/RW</span> <span>:</span>
              </td>
              <td class="ps-1 text-sm">004/004</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                <span class="ms-9">Kel/Desa</span> <span>:</span>
              </td>
              <td class="ps-1 text-sm">BANGSELOK</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                <span class="ms-9">KECAMATAN</span> <span>:</span>
              </td>
              <td class="ps-1 text-sm">KOTA SUMENEP</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Agama <span>:</span>
              </td>
              <td class="ps-1 text-sm">ISLAM</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Status Perkawinan <span>:</span>
              </td>
              <td class="ps-1 text-sm">BELUM KAWIN</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Pekerjaan <span>:</span>
              </td>
              <td class="ps-1 text-sm">PELAJAR/MAHASISWA</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Kewarganegaraan <span>:</span>
              </td>
              <td class="ps-1 text-sm">WNI</td>
            </tr>
            <tr>
              <td class="w-48 flex justify-between text-sm">
                Berlaku Hingga <span>:</span>
              </td>
              <td class="ps-1 text-sm">SEUMUR HIDUP</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="left-content grid">
        <div class="image-wrapper w-full">
          <img src="{{asset('../img/foto.jpg')}}" class=" object-cover h-full w-40 rounded" />
        </div>
        <div class="created-at text-center">
          <div class="region text-sm font-semibold mt-1">SUMENEP</div>
          <div class="region text-sm">11-03-2020</div>
        </div>
      </div>
    </div>
    <div class="footer-wrapper   grid place-items-end">
      <div class="signature-wrapper w-[8rem]">
        <img src="{{asset('img/ttd.png')}}" />
      </div>
    </div>
  </div>
</body>

</html>