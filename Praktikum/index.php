<?php include 'header.php'; ?>

<div class="main">
    <div class="inmain">
        <div class="leftbar">
            <div class="inleftbar">
                <h2>Formulir Pendaftaran</h2>
                <p id="silahkan">Silakan isi formulir di bawah ini untuk mendaftar.</p>
                <form action="" method="post">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <hr>

                    <label for="gender">Jenis Kelamin :</label>
                    <label><input type="radio" name="gender" value="cowo"> Laki-laki</label>
                    <label><input type="radio" name="gender" value="cewe"> Perempuan</label><br>
                    <hr>

                    <label for="Hobi">Hobi :</label>
                    <label><input type="checkbox" value="Membaca" name="Hobi" id="1"> Membaca</label>
                    <label><input type="checkbox" value="Olahraga" name="Hobi" id="2"> Olahraga</label><br>

                    <label for="kota">Pilih Kota :</label>
                    <select name="Kota" id="kota">
                        <option value="jakarta">Jakarta</option>
                        <option value="bandung">Bandung</option>
                        <option value="bekasi" selected>Bekasi</option>
                        <option value="karawang">Karawang</option>
                        <option value="cikampek">Cikampek</option>
                    </select>

                    <label for="teksa">Pesan Tambahan :</label>
                    <textarea name="teksa" id="teksa"></textarea>

                    <button class="btn">Kirim</button>
                </form>
            </div>
        </div>

        <div class="rightbar">
            <div class="inrightbar">
                <h2>Formulir Pendaftaran</h2>
                <p id="silahkan">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam pariatur dolores laborum ipsum sequi mollitia repellendus animi fuga odit distinctio.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
