 @include('common.header')
 @include('common.navbar')

 <section class="content-header">
     <h1>
         Contact Info List

     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/important')}}"><i class="fa fa-check-square"></i>Important</a></li>
         <li><a>Contact Info List</a></li>
     </ol>
 </section>

 <script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_delete(s_no);
    } else {
        return false;
    }
}

function for_delete(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "important/contact_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('important/contact_info_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
 </script>
 <script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
 </script>

 <!-- Main content -->
 <section class="content">
     <div class="row">
         <div class="col-xs-12">

             <!-- /.box -->

             <div class="box box-success">
                 <div class="box-header with-border">
                     <div class="col-md-4">
                         <h3 class="box-title">Contact Info List</h3>
                     </div>
                     <div class="col-md-4">
                         <center><button type="button" class="btn default"
                                 onclick="exportTableToExcel('printTable', 'Contact Report')"><i class="fa fa-print"
                                     aria-hidden="true"></i>Print In Excel</button></center>
                     </div>
                     <div class="col-md-4">
                         <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print"
                                     aria-hidden="true"></i>Print In Pdf</button></center>
                     </div>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body" id="printTable">
                     <table id="example1" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Serial No.</th>
                                 <th>Name</th>
                                 <th>Contact No</th>
                                 <th>Address</th>
                                 <th>Remark</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                             </tr>
                         </thead>
                         <tbody>

                             <tr>
                                 <th>1</th>
                                 <th>trtyjty</th>
                                 <th>5498598745</th>
                                 <th>kolar road bhopal</th>
                                 <th>seller</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=2');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('2');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>2</th>
                                 <th>jitendra singh</th>
                                 <th>9685748596</th>
                                 <th>Nanak ward khurai </th>
                                 <th>check link for job awareness </th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=5');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('5');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>3</th>
                                 <th>narendra</th>
                                 <th>9898989898</th>
                                 <th>Gautam Nagar</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=7');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('7');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>4</th>
                                 <th>abcd</th>
                                 <th>123456789</th>
                                 <th>abc</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=8');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('8');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>5</th>
                                 <th>umesh</th>
                                 <th>7067247461</th>
                                 <th>abc</th>
                                 <th>abc</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=9');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('9');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>6</th>
                                 <th>shivani</th>
                                 <th>9691358302</th>
                                 <th>C/4 Building, 2nd Floor, Near Prabhat petrol pump, Subhash Nagar, Ashoka Garden,
                                     http://simption.com/</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=10');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('10');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>7</th>
                                 <th>VIKAS MODI</th>
                                 <th>8109433924</th>
                                 <th>SEONI</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=11');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('11');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>8</th>
                                 <th>simption</th>
                                 <th>00000</th>
                                 <th>Near Prabhat petrol pump, Subhash Nagar, Ashoka, Garden,</th>
                                 <th>Neelam followup</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=12');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('12');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>9</th>
                                 <th>heeralal nain</th>
                                 <th>9950509855</th>
                                 <th>vpo- bachharara</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=13');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('13');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>10</th>
                                 <th>Omprakash</th>
                                 <th>9950509855</th>
                                 <th>Bachharara</th>
                                 <th>Hy</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=14');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('14');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>11</th>
                                 <th>Bhanwar singh</th>
                                 <th>8005843348</th>
                                 <th>Ratangarh</th>
                                 <th>Hello</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=15');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('15');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>12</th>
                                 <th>madhu</th>
                                 <th>9691358302</th>
                                 <th>bhopal</th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=16');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('16');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>13</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=17');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('17');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>14</th>
                                 <th>jghuyj</th>
                                 <th>54</th>
                                 <th>2</th>
                                 <th>2-3 baje call krna hai,demo dena hai / call not received / call cut kr rhe hai
                                     //20-03-2021 aaj 3 baje tk baat karenge bol rhe hai</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=18');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('18');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>15</th>
                                 <th>testing</th>
                                 <th>9144555966</th>
                                 <th>testing</th>
                                 <th>testing</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=19');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('19');">Delete</button></th>
                             </tr>

                             <tr>
                                 <th>16</th>
                                 <th>sakshi katiyar</th>
                                 <th>8909890</th>
                                 <th>kanpur</th>
                                 <th>567</th>

                                 <th><button type="button" class="btn btn-success"
                                         onclick="post_content('important/contact_edit','id=20');">Edit</button></th>
                                 <th><button type="button" class="btn btn-success"
                                         onclick="return valid('20');">Delete</button></th>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <!-- /.box-body -->
             </div>
             <!-- /.box -->
         </div>
         <!-- /.col -->
     </div>
     <!-- /.row -->
 </section>
 <script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
 </script>
 <script>
$(function() {
    $('#example1').DataTable()
})
 </script>
 @include('common.footer')