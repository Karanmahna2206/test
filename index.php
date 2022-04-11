<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">

    <form action="../task_2/index2.php"  method="post" enctype="multipart/form-data">
      <div></div>
      
      
        <div class="col-xs-6 form-group">
          <label class="control-label col-xs-6" for="name">name:</label>
          <div class="col-xs-6">
            <input class="form-control" name="name" id="name" placeholder="Enter name">
          </div>
        </div>
        <div class="col-xs-6 form-group">
          <label class="control-label col-xs-6" for="email">email:</label>
          <div class="col-xs-6">
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
          </div>
        </div>
        <div class="col-xs-6 form-group">
          <label class="control-label col-xs-6">password:</label>
          <div class="col-xs-6">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
        </div>
        <div class="col-xs-6 form-group">
          <label class="control-label col-xs-6">Confirm password:</label>
          <div class="col-xs-6">
            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter confirm password">
          </div>
        </div>

        <div class="col-xs-6 form-group">
          <div class="col-sm-offset-2 col-xs-6">

            <button type="submit" class="btn-info form-control"  value="submit" name="submit">Submit</button>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var cpassword = document.getElementById("cpassword").value;
        var dataString = 'name=' + name + 'email=' + email + 'password=' + password + 'cpassword=' + cpassword;
            $.ajax({
                type: "POST",
                url: "../Controller/Index.php/Index/register",
                data: dataString,
                success: function(data) {
                  
                }
            });
</script>
