<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons fs-16">dashboard</i> Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">WELCOME TO DASHBOARD</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget" style="background-color:#00F2FF;">
                      <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 3.2%</span>
                      <div class="ms-card-body media">
                        <div class="media-body">
                          <span class="black-text text-white"><strong>Total Visitors</strong></span>
                          <h2 class="text-white">8,451</h2>
                        </div>
                      </div>
                      <canvas id="line-chart-4" width="392" height="195" class="chartjs-render-monitor" style="display: block;color:pink; width: 392px; height: 195px;">
                      </canvas>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget" style="background-color: #DB4A39;">
                      <span class="ms-chart-label bg-black"><i class="material-icons">arrow_downward</i> 2.2%</span>
                      <div class="ms-card-body media">
                        <div class="media-body">
                          <span class="black-text text-white"><strong>Total Sales</strong></span>
                          <h2 class="text-white">₱618,451</h2>
                        </div>
                      </div>
                      <canvas id="line-chart-4" width="392" height="195" class="chartjs-render-monitor" style="display: block;color:pink; width: 392px; height: 195px;">
                      </canvas>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget" style="background-color: #00A0D1;">
                      <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i>83.2%</span>
                      <div class="ms-card-body media">
                        <div class="media-body">
                          <span class="black-text text-white"><strong>Total Purchase</strong></span>
                          <h2 class="text-white">451</h2>
                        </div>
                      </div>
                      <canvas id="line-chart-4" width="392" height="195" class="chartjs-render-monitor" style="display: block;color:pink; width: 392px; height: 195px;">
                      </canvas>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget" style="background-color: #3B5998;color:white;">
                      <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 63.2%</span>
                      <div class="ms-card-body media">
                        <div class="media-body">
                          <span class="black-text text-white"><strong>Nearly Expired Items</strong></span>
                          <h2 class="text-white">51</h2>
                        </div>
                      </div>
                      <canvas id="line-chart-4" width="392" height="195" class="chartjs-render-monitor" style="display: block;color:pink; width: 392px; height: 195px;">
                      </canvas>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-6 ms-panel">
                    <div class="ms-panel-header">
                      <div class="d-flex justify-content-between">
                        <div class="align-self-center align-left">
                          <h6>Recent Orders Requested</h6>
                        </div>
                        <button type="button" class="btn btn-primary">View All</button>
                      </div>
                    </div>
                    <div class="ms-panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Food Item</th>
                              <th scope="col">Price</th>
                              <th scope="col">Product ID</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="ms-table-f-w"> <img src="<?php echo base_url(); ?>pages\assets\img\costic\pizza.jpg" alt="people"> Pizza </td>
                              <td>$19.99</td>
                              <td>67384917</td>
                            </tr>
                            <tr>
                              <td class="ms-table-f-w"> <img src="<?php echo base_url(); ?>pages\assets\img\costic\french-fries.jpg" alt="people"> French Fries </td>
                              <td>$14.59</td>
                              <td>789393819</td>
                            </tr>
                            <tr>
                              <td class="ms-table-f-w"> <img src="<?php echo base_url(); ?>pages\assets\img\costic\cereals.jpg" alt="people"> Multigrain Hot Cereal </td>
                              <td>$25.22</td>
                              <td>137893137</td>
                            </tr>
                            <tr>
                              <td class="ms-table-f-w"> <img src="<?php echo base_url(); ?>pages\assets\img\costic\egg-sandwich.jpg" alt="people"> Fried Egg Sandwich </td>
                              <td>$11.23</td>
                              <td>235193138</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 ms-panel ms-panel-fh">
                    <div class="ms-panel-header new">
                      <h6>Monthly Revenue</h6>
                      <select class="form-control new" id="exampleSelect">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March </option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="1">June</option>
                        <option value="2">July</option>
                        <option value="3">August</option>
                        <option value="4">September</option>
                        <option value="5">October</option>
                        <option value="4">November</option>
                        <option value="5">December</option>
                      </select>
                    </div>
                    <div class="ms-panel-body">
                      <span class="progress-label"> <strong>Week 1</strong> </span>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                      <span class="progress-label"> <strong>Week 2</strong> </span>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                      </div>
                      <span class="progress-label"> <strong>Week 3</strong> </span>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                      </div>
                      <span class="progress-label"> <strong>Week 4</strong> </span>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                      </div>
                    </div>
                </div>

                <div class="col-12  ms-panel">
            <div class="ms-panel-header">
              <h6>Inventory Movement</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Order Name</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Location</th>
                      <th scope="col">Order Status</th>
                      <th scope="col">Delivered Time</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>French Fries</td>
                      <td>Jhon Leo</td>
                      <td>New Town</td>
                      <td><span class="badge badge-primary">Pending</span>
                      </td>
                      <td>10:05</td>
                      <td>$10</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Mango Pie</td>
                      <td>Kristien</td>
                      <td>Old Town</td>
                      <td><span class="badge badge-dark">Cancelled</span>
                      </td>
                      <td>14:05</td>
                      <td>$9</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>FrieD Egg Sandwich</td>
                      <td>Jack Suit</td>
                      <td>Oxford Street</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$19</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Lemon Yogurt Parfait</td>
                      <td>Alesdro Guitto</td>
                      <td>Church hill</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$18</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Spicy Grill Sandwich</td>
                      <td>Jacob Sahwny</td>
                      <td>palace Road</td>
                      <td><span class="badge badge-success">Delivered</span>
                      </td>
                      <td>12:05</td>
                      <td>$21</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Chicken Sandwich</td>
                      <td>Peter Gill</td>
                      <td>Street 21</td>
                      <td><span class="badge badge-primary">Pending</span>
                      </td>
                      <td>12:05</td>
                      <td>$15</td>
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
</div>

<!-- NOTIFICATION -->
<?php 
  if($this->session->flashdata('success') != ""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }
?>

<script>
  $(document).ready(function() {

   
  });
</script>