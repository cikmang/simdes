  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
      <tr>
      <td width="33%"><strong>Nomor Surat</strong></td>
      <td width="67%" style="padding: 2px"><? echo $content['noSurat'] ; ?></td>
    </tr>
      <tr>
      <td><strong>Nama</strong></td>
      <td style="padding: 2px"><? echo $content['nama']; ?></td>
    </tr>
    <tr>
      <td><strong>Jenis Kelamin</strong></td>
      <td style="padding: 2px"><? echo $content['kelamin']; ?></td>
    </tr>
    <tr>
      <td><strong>Tempat Lahir</strong></td>
      <td style="padding: 2px"><? echo $content['tempatLahir']; ?></td>
    </tr>
    <tr>
      <td><strong>Tanggal Lahir</strong></td>
      <td style="padding: 2px"><? echo $content['tglLahir']; ?></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td style="padding: 2px"><? echo $content['status']; ?></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
<td style="padding: 2px"><?php echo$M_AGAMA[$content['kAgama']]; ?></td>
    </tr>
    <tr>
      <td><strong>Kewarganegaraan</strong></td>
      <td style="padding: 2px"><? echo $content['wargaNegara']; ?></td>
    </tr>
    <tr>
      <td><strong>Pekerjaan</strong></td>
      <td style="padding: 2px"><? echo $content['pekerjaan']; ?></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td style="padding: 2px"><? echo $content['alamat']; ?></td>
    </tr>
    <tr>
      <td><strong>Keperluan</strong></td>
      <td style="padding: 2px"><? echo $content['keperluan']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="padding: 2px">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Tanggal</strong></td>
      <td style="padding: 2px"><? echo $content['tglSurat'];?></td>
    </tr>
    <tr>
      <td><strong>Kades</strong></td>
      <td style="padding: 2px"><? echo $content['kades']; ?></td>
    </tr>
    <tr>
      <td style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="back" id="back" value="&laquo; KEMBALI" onclick="window.location = 'index.php?form=C.01'"/></td>
      <td style="padding: 2px 35px 2px 2px"><div align="right">
        <input  class="formbutton" type="button" name="print" id="print" value="CETAK &raquo;" onClick="window.open('index.php?form=C.03&print=true&id=<?php echo $id;?>','printsurat','scrollbars=yes,status=no,menubar=no,width=800,height=400')"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </div>
