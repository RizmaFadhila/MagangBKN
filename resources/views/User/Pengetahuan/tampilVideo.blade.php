 <div class="table table-bordered" style="padding-left: 5%;padding-right:5%">
     <h3 style="text-align: center">Data Peraturan</h3>
     <hr>
     <table border="1" width="100%" align="center" style="background-color: linen;border-color:black">
         <tr border="1px">
             <th class="col col-sm-8" style="text-align: center;color:black"><Strong>Judul</Strong></th>
             <th style="text-align: center;color:black"><strong>Kategori</strong></th>
             <th style="text-align: center;color:black"><strong>Video</strong></th>
         </tr>
         <tr border="1px">
             <td class="col col-sm-8" style="text-align: justify;color:black">{{ $pengetahuan->judul }}
             </td>
             <td style="text-align: center;color:black">{{ $pengetahuan->kategori }}
             </td>
             <td style="text-align: center;color:black"><a href="/storage/video/{{ $pengetahuan->video }}"
                     style="color: black">{{ $pengetahuan->video }}</a>
             </td>
         </tr>
     </table>
 </div>
