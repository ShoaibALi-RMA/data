
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<style>
.modal {
    top: 0 !important;
    left: 0;
    margin: 0px;
}
.modal.fade{
    opacity: 1
}
/* .modal a.close-modal{
    top: -5px;
    right: -5px
} */
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
}
.form-group {
    margin-bottom: 15px;
}
.orders-table tbody td {
    padding: 12px;
}
.data-table th, .data-table td {
    padding: 15px 5px;
    }
    .modal-header{
        font-size:16px;
    }
    .modal-body h4 {
    background: #f6762c;
    padding: 8px 10px;
    margin-bottom: 10px;
    font-weight: bold;
    color: #fff;
}

</style>
<section class="content">
    <div>
        </div>
            <a   class="button green-gradient" href="#ex1" rel="modal:open">Create User</a>
        </div>
        <div class="clear"></div>
        <h2 style="width:100%; background-color:#3e3e3e; color:white; text-align:center; 
        font-size:20px; font-weight:bold; margin-bottom:25px; padding:10px 0px">User Data</h2>

        <table class="data-table orders-table">
            <thead>
               
                <tr>
                    <th> Id </th>
                    <th>  Name</th>
                    <th>  Eamil </th>
                    <th>  Action </th>
                    
                </tr>
            </thead>
            <tbody>
                
             <?php 
             $i=1;
             foreach($data as $value) {
                 echo "<tr>";
                 echo "<td>".$i."</td>";
                 echo "<td>".$value->first_name.' '.$value->last_name."</td>";
                 echo "<td>".$value->email."</td>";
                 echo "<td><button class='update button green-gradient'  data-id='".$value->id."' >Update</button> ";
                 echo "<button type='button'  class='delete button red-gradient'  data-id='".$value->id."'>Delete</button></td>";
                 echo "</tr>";
                     $i++; } ?>
            </tbody>
        </table>

<div id="ex1" class="modal" style="display: none"> 
  
<form action='user/date/create' method="post">

    <input type="hidden" name="shiftroute" value="1">

     <div class="form-group">
     <label>First Name</label>
     <input type="text" name="first_name" id="first_name" class="form-control"  required/>
     <br />
     <label>Last Name</label>
     <input type="text" name="last_name" id="last_name" class="form-control"  required/>
     <br />
     <label>Email</label>
     <input type="text" name="email" id="email" class="form-control"  required/>
     <br />
     </div>  
    <div class="form-actions">
    <button type="submit" class="button orange-gradient" >
         Create User <i class="icon-plus icon-white"></i>
    </button>
    </div>
  </form>
</div>

<div id="ex2" class="modal" style="display: none"> 
<form action="user/data/update" method="put">

    <input type="hidden" name="shiftroute" value="1">

     <div class="form-group">
     <h1 class="modal-title">Update Work Time</h1>
     <label>First Name</label>
     <input type="hidden" name="id_time" id="id_time" class="form-control"  required/>
     <input type="text" name="first_name_edit" id="first_name_edit" class="form-control"  required/>
     <label>Last Name</label>
     <input type="text" name="last_name_edit" id="last_name_edit" class="form-control"  required/>
     
     <br />
     </div>  
    <div class="form-actions">
    <button type="submit" class="button orange-gradient">
         Update User <i class="icon-plus icon-white"></i>
    </button>
    </div>
  </form>
</div>

    </div>
</section>

<script>


// $(".delete").click(function(){
//     var x = confirm("Are you sure you want to delete?");
//   if(x)
//       {
// var element = $(this);
// var del_id = element.attr("data-id");
//     $.ajax({
//         type: "GET",
//         url: 'settings/worktime/'+del_id+'/delete',
//         success: function(){   
//          location.reload();  

//     }
// });}
// //return false;
// });



//   $(".update").click(function(){
//       var a;
//     var element = $(this);
// var del_id = element.attr("data-id");
//     $.ajax({
//         type: "GET",
//         url: 'settings/worktime/'+del_id+'/update',
//         success: function(data){   
//          a = JSON.parse(data);
//           console.log(a['start_time']);
//           $('#id_time').val(''+a['id']);
//           $('#start_time_edit').val(''+a['start_time']);
//           $('#end_time_edit').val(''+a['end_time']);
//           $('#ex2').modal();
         


//     }
// });
// //   alert(a['id']);
// //   $("#type").val(del_id);     
// //    //  $('#ex2').modal('show');
//   });

</script>

