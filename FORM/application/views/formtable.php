<!DOCTYPE html>
<html>
<head>
    <title>My first form</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <table class="table table-hover" border="5px black">
    <thead class="text-center thead-dark">
        <center><b><H2>TABLE DETAILS</H2></b></center>
    <tr>
      <th scope="col">Sr NO. </th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">company</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">gender</th>
      <th scope="col">Operation</th>
    </tr>

</thead>
<tbody>
<?php if(!empty($userData))
{
  foreach($userData as $vv)
  {
?>
    <tr>
      <td scope="col"><?php echo $vv['id'];?></td>
      <td scope="col"><?php echo $vv['first_name'];?></td>
      <td scope="col"><?php echo $vv['last_name'];?></td>
      <td scope="col"><?php echo $vv['company'];?></td>
      <td scope="col"><?php echo $vv['email'];?></td>
      <td scope="col"><?php echo $vv['phone'];?></td>
      <td scope="col"><?php echo $vv['city'];?></td>
      <td scope="col"><?php echo $vv['state'];?></td>
      <td scope="col"><?php echo $vv['gender'];?></td>
      <td scope="col">        
        <button type="submit" onclick="return edit(<?php echo $vv['id']; ?>)" class="btn btn-primary" style="width:70px">Edit</button>
        <button type="submit" onclick="return deleteRecord(<?php echo $vv['id']; ?>)" class="btn btn-danger" style="width:70px">Delete</button>
      </td>
    </tr>
  <?php
} }?>


  
    
</tbody>
</table>
  
<script type="text/javascript">
  function edit(id)
  {
    window.location.href='<?php echo base_url();?>Myfirstform/index/'+id+'';
  }
</script>

<script type="text/javascript">
  function deleteRecord(id){
    var conf = confirm("Are you sure to delete?");

    if(conf)
    {
      alert(id);
      window.location.href='<?php echo base_url();?>Myfirstform/deleteRecord/'+id+'';

    }
  }
</script>

<center>
    <button class="btn btn--radius-2 btn-danger btn-lg" style="width:100" onclick="window.location.href='<?php echo base_url();?>Myfirstform/';" type="submit">REGISTRATION</button>
</center>


</body>
</html>

