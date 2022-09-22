<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="hp">
	<META NAME="CREATED" CONTENT="20160111;2600000000000">
	<META NAME="CHANGEDBY" CONTENT="StupidLaptop">
	<META NAME="CHANGED" CONTENT="20181130;115500000000000">
	<META NAME="AppVersion" CONTENT="16.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE>
	<!--
		@page { size: 8.5in 14in; margin-left: 1in; margin-right: 1in; margin-top: 1.38in; margin-bottom: 1in }
		P { margin-bottom: 0.08in; direction: ltr; line-height: 100%; widows: 2; orphans: 2 }
		P.western { font-family: "Times New Roman", serif; font-size: 12pt; so-language: en-US }
		P.cjk { font-family: "Times New Roman"; font-size: 12pt }
		P.ctl { font-family: "Times New Roman"; font-size: 12pt }
	-->
	.row{
		background-color:#bfbfbf;
		-webkit-print-color-adjust: exact;
	}
	</STYLE>
</HEAD>
<?php
  foreach($view_Mlaporan as $detail){
	$day = date('D', strtotime($detail->tanggal));
	$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
	);
	$M = date('M', strtotime($detail->tanggal));
	$MList = array(
	'Dec' => 'Desember',
	'Nov' => 'November',
	'Oct' => 'Oktober',
	'Sept' => 'September',
	'Aug' => 'Agustus',
	'Jul' => 'Juli',
	'Jun' => 'Juni',
	'May' => 'Mei',
	'Apr' => 'April',
	'Mar' => 'Maret',
	'Feb' => 'Februari',
	'Jan' => 'Januari'
	);
	$d = date('d', strtotime($detail->tanggal));
	$Y = date('Y', strtotime($detail->tanggal));
?>
<BODY LANG="id-ID" DIR="LTR" onload="window.print()">
<P LANG="en-US" CLASS="western" ALIGN=CENTER >
<SPAN LANG="id-ID"><U><B>Surat Persetujuan Peminjaman Ruangan Sekolah </B></U></SPAN><br/>
<SPAN LANG="sv-SE">NIM Peminjam : </SPAN><SPAN LANG="id-ID"><?php echo $detail->no_pb; ?></SPAN></P>

<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
<span LANG="id-ID">Pada hari </span><SPAN LANG="id-ID"><?php echo $dayList[$day]; ?></SPAN>
<SPAN LANG="id-ID">tanggal </SPAN><?php echo date_indo($detail->tanggal); ?> <SPAN LANG="id-ID">Akan dilakukan peminjaman</SPAN>
</br>atas nama yang bertanda tangan di bawah ini :</SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
</P>

	<TABLE WIDTH=631 CELLPADDING=2 CELLSPACING=0>
		<TR VALIGN=TOP>
			<TD COLSPAN=2 WIDTH=250 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">1.	<?php echo $detail->nama; ?></SPAN></P>
			</TD>
			<TD COLSPAN=1 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">: &nbsp;</SPAN></P>
			</TD>
			<TD COLSPAN=3 WIDTH=284 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">Dengan NIM <?php echo $detail->no_pb; ?></SPAN></P>
			</TD>
		</TR>
	</TABLE>

<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
<SPAN LANG="id-ID"><SPAN LANG="id-ID">Dengan perincian ruangan sebagai berikut :</SPAN></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in">
</P>
<TABLE WIDTH=631 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=17>
	<COL WIDTH=76>
	<COL WIDTH=100>
	<COL WIDTH=106>
	<COL WIDTH=94>
	<COL WIDTH=46>
	<COL WIDTH=22>
	<COL WIDTH=57>
	<TR class="row">
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>No</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Nama
			Ruangan</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Tujuan</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Tanggal</B></SPAN></FONT></P>
		</TD>
	</TR>
	<?php
	$i=0;
	foreach($view_Dlaporan as $br){
		$i++;
	?>
	<TR>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $i ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER STYLE="margin-right: -0.08in">
			<FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->nama_barang ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER STYLE="margin-right: -0.08in">
			<FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $detail->tujuan ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER STYLE="margin-right: -0.08in">
			<FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $detail->tanggal ?></SPAN></FONT></P>
		</TD>
	</TR>
	<?php
    }
    ?>
</TABLE>
<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
<SPAN LANG="id-ID">Peminjaman ruangan atas nama <?php echo $detail->nama ?> telah <b>Disetujui & diizinkan</b> oleh pihak WAKA dan SARPRA, Peminjam
diizinkan untuk mendapatka kunci ruangan dan dapat melaksanakan kegiatan di ruangan yang dipilih.</SPAN></P>
<br>
<CENTER>
	<TABLE WIDTH=641 CELLPADDING=7 CELLSPACING=0>
		<COLGROUP>
			<COL WIDTH=97>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=118>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=41>
			<COL WIDTH=73>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=109>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=119>
		</COLGROUP>
		<?php
            }
        ?>
		<TR>
			<TD COLSPAN=6 WIDTH=627 HEIGHT=20 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=2><SPAN LANG="id-ID">Paraf
				Peminjam Ruangan</SPAN></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=6 WIDTH=627 HEIGHT=20 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=CENTER><BR>
				</P>
			</TD>
		</TR>
	</TABLE>
</CENTER>
<P LANG="en-US" CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
</BODY>
</HTML>
