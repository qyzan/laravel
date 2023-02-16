<x-app-layout>
    <div class="main-pages">
        <div class="container-fluid">
          <div class="row g-2 mb-3">
            <div class="col-12">
              <div class="d-block bg-white rounded shadow p-3">
                <h2>Dashboard</h2>
                <p>
                  This is a dashboard to record cybersecurity vulnerabilities that have been searched for as evaluation
                  material for learning object-based programming courses
                </p>
              </div>
            </div>
          </div>
    
          <div class="row g-3 mb-3">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                  <i class="fa fa-thin fa-gears fa-3x py-auto" aria-hidden="true"></i>
                  <div class="card-body text-end">
                    <h5 class="card-title">6</h5>
                    <p class="card-text">Skor Dasar</p>
                  </div>
                </div>
                <div class="card-footer bg-white">
                  <small class="text-start fw-bold">Cross-Site Scripting</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                  <i class="fa fa-duotone fa-shield fa-3x py-auto" aria-hidden="true"></i>
                  <div class="card-body text-end">
                    <h5 class="card-title">6</h5>
                    <p class="card-text">Skor Dasar</p>
                  </div>
                </div>
                <div class="card-footer bg-white">
                  <small class="text-start fw-bold">Security Misconfiguration</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                  <i class="fa fa-solid fa-folder-open fa-3x py-auto" aria-hidden="true"></i>
                  <div class="card-body text-end">
                    <h5 class="card-title">1</h5>
                    <p class="card-text">Skor Dasar</p>
                  </div>
                </div>
                <div class="card-footer bg-white">
                  <small class="text-start fw-bold">Directory Listing</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                  <i class="fa fa-duotone fa-user-secret fa-3x py-auto" aria-hidden="true"></i>
                  <div class="card-body text-end">
                    <h5 class="card-title">1</h5>
                    <p class="card-text">Skor Dasar</p>
                  </div>
                </div>
                <div class="card-footer bg-white">
                  <small class="text-start fw-bold">Open Port</small>
                </div>
              </div>
            </div>
          </div>
    
          <div class="row g-2">
            <div class="col-12 col-lg-6">
              <div class="d-block rounded shadow bg-white p-3">
                <canvas id="myChartOne"></canvas>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="d-block rounded shadow bg-white p-3">
                <canvas id="myChartTwo"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </x-app-layout>