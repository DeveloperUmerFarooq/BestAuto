@extends('layouts.admin.layout')
@section('title')
<title>Dashboard | Best Auto Repair & Tire</title>
@endsection

@section('content')
      <div class="container-fluid py-4 px-4">
        <h1 class="h3 mb-4 text-white">Dashboard Overview</h1>
        
        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-black border-primary h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-uppercase mb-2">Today's Appointments</h6>
                    <h3 class="mb-0 text-primary">12</h3>
                  </div>
                  <div class="icon bg-primary-light text-primary rounded-circle p-3">
                    <i class="fas fa-calendar-day"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="card bg-black border-primary h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-uppercase mb-2">Pending Appointments</h6>
                    <h3 class="mb-0 text-warning">5</h3>
                  </div>
                  <div class="icon bg-warning-light text-warning rounded-circle p-3">
                    <i class="fas fa-clock"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="card bg-black border-primary h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-uppercase mb-2">Total Users</h6>
                    <h3 class="mb-0 text-info">87</h3>
                  </div>
                  <div class="icon bg-info-light text-info rounded-circle p-3">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="card bg-black border-primary h-100">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-uppercase mb-2">Revenue (Monthly)</h6>
                    <h3 class="mb-0 text-success">$12,345</h3>
                  </div>
                  <div class="icon bg-success-light text-success rounded-circle p-3">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row g-4">
            <!-- Recent Appointments -->
          <div class="col-lg-8">
            <div class="card bg-black border-primary h-100">
              <div class="card-header border-bottom border-primary">
                <h5 class="mb-0">Recent Appointments</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#1234</td>
                        <td>John Doe</td>
                        <td>Oil Change</td>
                        <td>Today, 10:00 AM</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                          <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>#1233</td>
                        <td>Jane Smith</td>
                        <td>Tire Rotation</td>
                        <td>Today, 11:30 AM</td>
                        <td><span class="badge bg-primary">In Progress</span></td>
                        <td>
                          <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>#1232</td>
                        <td>Michael Johnson</td>
                        <td>Brake Service</td>
                        <td>Today, 2:00 PM</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                          <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>#1231</td>
                        <td>Sarah Williams</td>
                        <td>AC Repair</td>
                        <td>Tomorrow, 9:00 AM</td>
                        <td><span class="badge bg-secondary">Scheduled</span></td>
                        <td>
                          <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-end mt-3">
                  <a href="" class="btn btn-primary">
                    View All Appointments <i class="fas fa-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Quick Stats -->
          <div class="col-lg-4">
            <div class="card bg-black border-primary h-100">
              <div class="card-header border-bottom border-primary">
                <h5 class="mb-0">Quick Stats</h5>
              </div>
              <div class="card-body">
                <div class="mb-4">
                 <h6 class="mb-3">Appointments by Status</h6>
                    <div class="chart-container" style="position: relative; height:250px; width:100%">
                     <canvas id="appointmentsChart"></canvas>
                     </div>
                    </div>
                
                <div class="mb-4">
                  <h6 class="mb-3">Popular Services</h6>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center border-secondary">
                      Oil Change
                      <span class="badge bg-primary rounded-pill">24</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center border-secondary">
                      Tire Services
                      <span class="badge bg-primary rounded-pill">18</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center border-secondary">
                      Brake Repair
                      <span class="badge bg-primary rounded-pill">12</span>
                    </li>
                    <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center border-secondary">
                      AC Service
                      <span class="badge bg-primary rounded-pill">8</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@push('scripts')
    <script>
document.addEventListener('DOMContentLoaded', function () {
  const ctx = document.getElementById('appointmentsChart').getContext('2d');

  const appointmentsChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Completed', 'In Progress', 'Pending'],
      datasets: [{
        data: [45, 30, 25],
        backgroundColor: [
          '#28a745',  
          '#0d6efd',  
          '#ffc107'   
        ],
        borderWidth: 1,
        borderColor: '#121212'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            color: '#fff',
            font: {
              size: 12
            }
          }
        },
        tooltip: {
          callbacks: {
            label: function (context) {
              return `${context.label}: ${context.raw} appointments`;
            }
          }
        },
        
        datalabels: {
          color: '#f8f9fa',
          font: {
            weight: 'bold',
            size: 14
          },
          formatter: function (value, context) {
            return value;
          }
        }
      }
    },
    plugins: [ChartDataLabels] 
  });
});
</script>
@endpush