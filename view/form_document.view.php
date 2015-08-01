<h1>Create document</h1>
    <div class="col-md-8">
      <img src="http://placehold.it/630x891&text=Document" style="width:100%">
    </div>  
    <div class="col-md-4">
      <form>
        <div class="form-group">
          <label for="template">Template</label>
          <select class="form-control">
            <option value="1">Default</option>
            <option value="2">Accounts</option>
            <option value="3">Contracts</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter the documents name">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control">
            <option value="1">Income</option>
            <option value="2">Accounts</option>
            <option value="3">Contracts</option>
            <option value="4">Receipts</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date">
        </div>
        <button type="submit" class="btn btn-default">Create</button>
      </form>
    </div>