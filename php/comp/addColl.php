
<div class='col-md-12 addForm'>
  <div class='row'>
    <div class='col-md-6'>
      <form method="get" action='php/newColl.php'>
        <div class="form-group">
          <label for="newColl">Collection Name: </label>
            <input type="text" class="form-control" required id="newColl" name='newColl'>
          </div>
          <div class="form-group">
            <label for="newDesc">Collection Desc:</label>
            <textarea type="textbox" class="form-control" id="newDesc" name='newDesc' value=''></textarea>
          </div>
        <button type="Submit" class="btn btn-default" id='submitAdd'>Add</button>
    </form>
    </div>
  </div>
</div>
