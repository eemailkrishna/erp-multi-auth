
<script>
    function set_message(value){
        document.getElementById('message_box').value=value;
    }
</script>
<select class="form-control" onchange="set_message(this.value)">
    <option value="">Select Template</option>
 </select>
