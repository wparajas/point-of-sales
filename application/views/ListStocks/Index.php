<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?php base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List of Stocks</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF STOCKS</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="offset-md-9 col-md-3">
                        <div class="form-group">
                          <select name="select_location" id="select_location" class="form-control">
                            <option value="">WH-20-00001</option>
                            <option value="">WH-20-00002</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="table-listOfStocks" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>BARCODE</th>
                            <th>QTY</th>
                            <th>TOTAL QTY</th>
                            <th>UOM</th>
                            <th>STATUS</th>
                          </tr>
                        </thead>
                          <tbody>
                            <tr class="text-center">
                              <td>ITM-20-00001</td>
                              <td class="text-left">Soy Sauce</td>
                              <td class="text-left">
                                <div>ITM-20-00001-08-01-21</div>
                                <div>ITM-20-00001-08-01-24</div>
                              </td>
                              <td>
                                <div>3</div>
                                <div>2</div>
                              </td>
                              <td>5</td>
                              <td class="text-left">pieces</td>
                              <td>
                                <button class="badge badge-outline-danger">REQUEST</button>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>ITM-20-00002</td>
                              <td class="text-left">Oil</td>
                              <td class="text-left">
                                <div>ITM-20-00002-08-01-21</div>
                                <div>ITM-20-00002-08-01-24</div>
                                <div>ITM-20-00001-08-01-27</div>
                              </td>
                              <td>
                                <div>3</div>
                                <div>6</div>
                                <div>1</div>
                              </td>
                              <td>10</td>
                              <td class="text-left">liter</td>
                              <td></td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $("#table-listOfStocks").DataTable();


  })
</script>