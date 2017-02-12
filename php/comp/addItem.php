<div class='col-md-12 addForm'>
  <div class='row'>
    <div class='col-md-6'>
      <form method="get" action='php/newItem.php'>
        <div class="form-group">
          <label for="newColl">Item Name: </label>
            <input type="text" class="form-control" required id="newItem" name='newItem'>
         </div>
         <div class="form-group">
           <label for="newColl">Quantity: </label>
             <input type="number" class="form-control" required id="q" name='q'>
          </div>
         <div class="form-group">
            <label for="newColl">Trading Details: </label>
            <select class='form-control' id='td' name='td'>
              <option value='-1' selected disabled>Choose</option>
              <option value='0'>Cash</option>
              <option value='1'>Trade For:</option>
              <option value='2'>Not Trading</option>
            </select>
            <input class='form-control' type='hidden' id='tDesc' name='tDesc' value="">
         </div>
         <div class="form-group">
            <label for="newDesc">Item Desc:</label>
            <textarea type="textbox" class="form-control" id="newDesc" name='newDesc' value=''></textarea>
          </div>
        <button type="Submit" class="btn btn-default" id='submitAdd'>Add</button>
    </form>
    </div>
  </div>
</div>
