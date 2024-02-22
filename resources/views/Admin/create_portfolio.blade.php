@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
      <div class="card height-equal">
        <div class="card-header pb-0">
          <h3>Basic input</h3>
          <p class="f-m-light mt-1"></p>
        </div>
        <form class="form theme-form">
          <div class="card-body custom-input">
            <div class="row">
              <div class="col">
                <div class="mb-3 row">
                  <label class="col-sm-3">Placeholder</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Type your title in Placeholder">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Password</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="password" placeholder="Password input">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Email</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="email" placeholder="Enter Email">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Number</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="number" placeholder="Number">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Telephone</label>
                  <div class="col-sm-9">
                    <input class="form-control m-input digits" type="tel" value="+8801793651750">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">URL</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="url" value="https://pulok.info">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Date and time</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" id="example-datetime-local-input" type="datetime-local" value="2018-01-19T18:45:00">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Date</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="date" value="2018-01-01">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Month</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="month" value="2018-01">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Week</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="week" value="2018-W09">
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <label class="form-label" for="exampleDataList">Datalist example</label>
                  </div>
                  <div class="col-sm-9">
                    <input class="form-control" id="exampleDataList" list="datalistOptions" placeholder="Look up your nation...">
                    <datalist id="datalistOptions">
                      <option value="San Francisco"></option>
                      <option value="New York"></option>
                      <option value="Seattle"></option>
                      <option value="Los Angeles"></option>
                      <option value="Chicago"></option>
                      <option value="India"> </option>
                    </datalist>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3">Time</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="time" value="21:45:00">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3">Static Text</label>
                  <div class="col-sm-9">
                    <div class="form-control-static">
                      Hello !... This is
                      my magical text
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <div class="col-sm-9 offset-sm-3">
              <button class="btn btn-primary me-3" type="submit">Submit</button>
              <input class="btn btn-light" type="reset" value="Cancel">
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

@include('layout.adminfooter')
