@include('common.header')
@include('common.navbar')

<table id="" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>S No</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th><input type="checkbox" id="all_check" onclick="for_check(this.id);" checked></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Aashish<input type="hidden" checked value="Aashish" name="2200758">
            </td>
            <td>Ramesh</td>
            <td> <input type="checkbox" checked value="2200758" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>raman<input type="hidden" checked value="raman" name="2200770">
            </td>
            <td>tapan</td>
            <td> <input type="checkbox" checked value="2200770" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>yashi<input type="hidden" checked value="yashi" name="2200782">
            </td>
            <td>pushpendra</td>
            <td> <input type="checkbox" checked value="2200782" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>ABHIMANYU SHARMA<input type="hidden" checked value="ABHIMANYU SHARMA" name="2200785">
            </td>
            <td>GOURAV SHARMA</td>
            <td> <input type="checkbox" checked value="2200785" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>shree<input type="hidden" checked value="shree" name="2200790">
            </td>
            <td>samay singh </td>
            <td> <input type="checkbox" checked value="2200790" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>Ajay<input type="hidden" checked value="Ajay" name="2200793">
            </td>
            <td>Vijay</td>
            <td> <input type="checkbox" checked value="2200793" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>Druwa Ganesh Chaudhari<input type="hidden" checked value="Druwa Ganesh Chaudhari" name="2200795">
            </td>
            <td>Ganesh Chaudhari</td>
            <td> <input type="checkbox" checked value="2200795" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>SHIVANSH RAWAT<input type="hidden" checked value="SHIVANSH RAWAT" name="2200800">
            </td>
            <td>AJAY</td>
            <td> <input type="checkbox" checked value="2200800" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>Yash <input type="hidden" checked value="Yash " name="2200823">
            </td>
            <td>Soun</td>
            <td> <input type="checkbox" checked value="2200823" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>पंकज कुमार<input type="hidden" checked value="पंकज कुमार" name="2200884">
            </td>
            <td>लालू राम</td>
            <td> <input type="checkbox" checked value="2200884" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>11</td>
            <td>Aamna Hussain<input type="hidden" checked value="Aamna Hussain" name="2201009">
            </td>
            <td>Syed Farhat Hussain</td>
            <td> <input type="checkbox" checked value="2201009" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>12</td>
            <td>Nitya Yadav<input type="hidden" checked value="Nitya Yadav" name="2201035">
            </td>
            <td>Mr. Mayank Yadav</td>
            <td> <input type="checkbox" checked value="2201035" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>13</td>
            <td>Shubh Kashyap<input type="hidden" checked value="Shubh Kashyap" name="2201036">
            </td>
            <td>Mr. Anikesh Kumar</td>
            <td> <input type="checkbox" checked value="2201036" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>14</td>
            <td>Arohi Kushwaha<input type="hidden" checked value="Arohi Kushwaha" name="2201037">
            </td>
            <td>Mr. Shailendra Singh Kushwaha</td>
            <td> <input type="checkbox" checked value="2201037" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>15</td>
            <td>Anikesh<input type="hidden" checked value="Anikesh" name="2201038">
            </td>
            <td>Mr. Amit Kumar</td>
            <td> <input type="checkbox" checked value="2201038" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>16</td>
            <td>Prithviraj<input type="hidden" checked value="Prithviraj" name="2201039">
            </td>
            <td>Dr. Pramod Kumar</td>
            <td> <input type="checkbox" checked value="2201039" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>17</td>
            <td>Arushi Diwakar<input type="hidden" checked value="Arushi Diwakar" name="2201040">
            </td>
            <td>Mr. Virendra Kumar</td>
            <td> <input type="checkbox" checked value="2201040" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>18</td>
            <td>Kartik Nishad<input type="hidden" checked value="Kartik Nishad" name="2201041">
            </td>
            <td>Kartik Nishad</td>
            <td> <input type="checkbox" checked value="2201041" class="all_check" name="move_student_from[]">
            </td>
        </tr>
        <tr>
            <td>19</td>
            <td>Rahul Kumar<input type="hidden" checked value="Rahul Kumar" name="2201086">
            </td>
            <td>Lalbabu Ray</td>
            <td> <input type="checkbox" checked value="2201086" class="all_check" name="move_student_from[]">
            </td>
        </tr>
    </tbody>
</table>
@include('common.footer')

<script>
$(function() {
    $('#example3').DataTable()
})
</script>