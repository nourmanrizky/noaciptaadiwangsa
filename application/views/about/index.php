<div id="fluidabout">
    <div class=" jumbotron jumbotron-fluid ez">
        <h3 style="text-decoration: underline; margin-top: 100px; color: white;"><strong>
            
        <?php
			if( ! empty($legalistassatu)){ 
				foreach($legalistassatu as $legalistassatu){
					echo "$legalistassatu->judul
                               ";

                               ?>
			

      </strong>
        </h3>

    </div>
</div>


<!-- isi -->

<div id="sejarah">
    <div class="container mt-4">
    <style type="text/css">
   .p { text-align: justify;}
</style>

        <p style="text-align: justify;">
          <?php

echo "$legalistassatu->isi
";
          	}
        }
        ?>
        </p>
        <br>
        <h5 style="font-weight: 700; text-align: center;">

            <span><?php
			if( ! empty($legalistasdua)){ 
				foreach($legalistasdua as $legalistasdua){
					echo "$legalistasdua->judul
                               ";

                               ?></span>

        </h5>
        <p style="text-align: justify;">
        <?php

echo "$legalistasdua->isi
";
          	}
        }
        ?>
        </p>

        <br>


        <br>



        <div class="row">

            <div class="col-md-5 visi">
                <h5 style="font-weight: 700; text-align: center;">
                    <span>Visi Perusahaan</span>

                </h5>
                <p style=" text-align: justify;">
                    Menjadi perusahaan jasa pengamanan yang profesional terdepan, terpercaya dan terbaik dalam
                    memberikan pelayanan dan konsultasi keamanan
                </p>
            </div>
            <div class="col-md-5 visi">
                <h5 style="font-weight: 700; text-align: center;">
                    <span>
                        Misi Perusahaan
                    </span>
                </h5>
                <p style="text-align: justify;">
                    Memberikan jaminan rasa aman, nyaman dan kepuasan
                    kepada pelanggan melalui kualitas pelayanan yang cepat,
                    efektif dan efisien.
                    menjalin hubungan yang harmonis dan berkelanjutan
                    dengan stakeholder, pelanggan, karyawan, aparat
                    terkait dan lingkungan
                </p </div>

            </div>
            <br>

        </div>

    </div>


    <div id="legalitas">
        <div class="container">
            <h5 style="text-align: center;">

                <span><strong>Legalitas</strong></span>
                <hr>

            </h5>
            <div class="row">
                
                <div class="col-lg-6 textleft">

                    <br>

                    <table cellspacing="4" cellpadding="6" border="0" style="margin: auto; margin-bottom:20px">
                        <tbody>
                        <?php
			if( ! empty($legalistas)){ 
				foreach($legalistas as $legalistas){
					echo "<tr>
                               
                                <th>".$legalistas->judul."</th>
                                <td> : </td>
                                <td> ".$legalistas->isi."</td>
                      
					</tr>";
				}
			}
            ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>







    <!-- end isi -->