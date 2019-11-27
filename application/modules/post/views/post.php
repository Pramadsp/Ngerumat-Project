<!-- Content area -->
<div class="content pt-12">

<!-- Main charts -->
<div class="row">
    <div class="col-xl-12">
    
    <a href="#" class="btn bg-indigo-300" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="icon-plus2"></i> New Post</a>
    <br><br>

        <!-- Traffic sources -->
        <div class="card">
            <div class="card-header header-elements-inline">
            <div class="table-responsive">
            <table class="table datatable-dom-position">
        <thead>
            <tr>
                <th>Id Artikel</th>
                <th>Name</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Weible</td>
                <td><a href="#">Airline Transport Pilot</a></td>
                <td>3 Oct 1981</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hard</td>
                <td>Business Services Sales Representative</td>
                <td>19 Apr 1969</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="#">Pretty</a></td>
                <td>Drywall Stripper</td>
                <td>13 Dec 1977</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Leland</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>30 Dec 1991</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="#">Woldt</a></td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>17 Oct 1987</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="#">Mcgaughy</a></td>
                <td>Hemodialysis Technician</td>
                <td>11 Nov 1983</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="#">Goodlow</a></td>
                <td>Technical Services Librarian</td>
                <td>1 Nov 1961</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>18 Dec 1960</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><a href="#">Nailor</a></td>
                <td>Technical Services Librarian</td>
                <td>10 Jan 1980</td>
                <td><button type="button"class="badge-primary">View</button> <button type="button"class="badge-danger">Delete</button> <button type="button"class="badge-success">Update</button></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
            </div>
        </div>
        <!-- /latest posts -->

    </div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Content</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
          <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>

<!-- Tutup Modal -->
    

            </div>
        </div>
        <!-- /progress counters -->


        <!-- Daily sales -->
        </div>
    </div>
        <!-- /daily financials -->

    </div>
</div>
<!-- /dashboard content -->

</div>
</div>
<!-- /content area -->