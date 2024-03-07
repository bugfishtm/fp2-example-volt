<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
	*/
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
?> 
            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Bootstrap tables</h1>
                        <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
                    </div>
                    <div>
                        <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/tables/" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Bootstrap Tables Docs
                        </a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">#</th>
                                    <th class="border-0">Traffic Source</th>
                                    <th class="border-0">Source Type</th>
                                    <th class="border-0">Category</th>
                                    <th class="border-0">Global Rank</th>
                                    <th class="border-0">Traffic Share</th>
                                    <th class="border-0 rounded-end">Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Item -->
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">1</a> </td>
                                    <td class="fw-bold d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                                        Direct
                                    </td>
                                    <td>
                                        Direct
                                    </td>
                                    <td>
                                       - 
                                    </td>
                                    <td>
                                       --
                                    </td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">51%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100" style="width: 51%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">2.45%</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">2</a> </td>
                                    <td class="fw-bold d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-500 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                                        Google Search
                                    </td>
                                    <td>
                                        Search / Organic
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                       --
                                    </td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">18%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">17.78%</span>
                                        </div>                          
                                    </td>
                                </tr>
                                <!-- End of Item -->
    
                                <!-- Item -->
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">3</a> </td>
                                    <td class="fw-bold d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-500 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                                        youtube.com
                                    </td>
                                    <td>
                                        Social
                                    </td>
                                    <td>
                                        <a class="small fw-bold" href="#">Arts and Entertainment</a>
                                    </td>
                                    <td>
                                       #2
                                    </td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">18%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        -                                
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">4</a> </td>
                                    <td class="fw-bold d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-500 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="yahoo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M223.69,141.06,167,284.23,111,141.06H14.93L120.76,390.19,82.19,480h94.17L317.27,141.06Zm105.4,135.79a58.22,58.22,0,1,0,58.22,58.22A58.22,58.22,0,0,0,329.09,276.85ZM394.65,32l-93,223.47H406.44L499.07,32Z"></path></svg>
                                        yahoo.com
                                    </td>
                                    <td>
                                        Referral
                                    </td>
                                    <td>
                                        <a class="small fw-bold" href="#">News and Media</a>
                                    </td>
                                    <td>
                                       #11
                                    </td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">8%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">9.45%</span>
                                        </div>                                
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td><a href="#" class="text-primary fw-bold">5</a> </td>
                                    <td class="fw-bold d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-500 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                                        twitter.com
                                    </td>
                                    <td>
                                        Social
                                    </td>
                                    <td>
                                        <a class="small fw-bold" href="#">Social Networks</a>
                                    </td>
                                    <td>
                                    #4
                                    </td>
                                    <td>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-xl-2 px-0">
                                                <div class="small fw-bold">4%</div>
                                            </div>
                                            <div class="col-12 col-xl-10 px-0 px-xl-1">
                                                <div class="progress progress-lg mb-0">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        -                                
                                    </td>
                                </tr>
                                <!-- End of Item -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">Country</th>
                                    <th class="border-0">All</th>
                                    <th class="border-0">All Change</th>
                                    <th class="border-0">Travel & Local</th>
                                    <th class="border-0">Travel & Local Change</th>
                                    <th class="border-0">Widgets</th>
                                    <th class="border-0 rounded-end">Widgets Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">United States</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">106</td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">5</span>
                                        </div> 
                                    </td>
                                    <td class="border-0 fw-bold">
                                       3 
                                    </td>
                                    <td class="border-0">
                                       =
                                    </td>
                                    <td class="border-0 fw-bold">
                                       32  
                                    </td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">3</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End of Item -->

                               <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">Canada</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">76</td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">17</span>
                                        </div>
                                    </td>
                                    <td class="border-0 fw-bold">
                                    4 
                                    </td>
                                    <td class="border-0">
                                    =
                                    </td>
                                    <td class="border-0 fw-bold">
                                    30  
                                    </td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">3</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End of Item -->
    
                               <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">United Kingdom</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">147</td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">10</span>
                                        </div>
                                    </td>
                                    <td class="border-0 fw-bold">
                                    5 
                                    </td>
                                    <td class="border-0">
                                    =
                                    </td>
                                    <td class="border-0 fw-bold">
                                    34  
                                    </td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">7</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">France</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">112</td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">3</span>
                                        </div>
                                    </td>
                                    <td class="border-0 fw-bold">
                                    5 
                                    </td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">1</span>
                                        </div>
                                    </td>
                                    <td class="border-0 fw-bold">
                                    34  
                                    </td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">2</span>
                                        </div> 
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">Japan</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">115</td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">12</span>
                                        </div> 
                                    </td>
                                    <td class="border-0 fw-bold">
                                    6 
                                    </td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">1</span>
                                        </div> 
                                    </td>
                                    <td class="border-0 fw-bold">
                                    37  
                                    </td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">5</span>
                                        </div> 
                                    </td>
                                </tr>
                                <!-- End of Item -->

                                <!-- Item -->
                                <tr>
                                    <td class="border-0">                                             
                                        <a href="#" class="d-flex align-items-center">
                                            <div><span class="h6">Germany</span></div>
                                        </a>
                                    </td>
                                    <td class="border-0 fw-bold">220</td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">56</span>
                                        </div> 
                                    </td>
                                    <td class="border-0 fw-bold">
                                        7 
                                    </td>
                                    <td class="border-0 text-danger">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="fw-bold">3</span>
                                        </div> 
                                    </td>
                                    <td class="border-0 fw-bold">
                                        30  
                                    </td>
                                    <td class="border-0 text-success">
                                        <div class="d-flex align-items-center">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>                                   
                                            <span class="fw-bold">2</span>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End of Item -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Volt</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                        </ol>
                    </nav>
                    <h2 class="h4">All Orders</h2>
                    <p class="mb-0">Your web analytics dashboard template.</p>
                </div>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        New Plan
                    </a>
                    <div class="btn-group ms-2 ms-lg-3">
                        <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
                    </div>
                </div>
            </div>
            <div class="table-settings mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col col-md-6 col-lg-3 col-xl-4">
                        <div class="input-group me-2 me-lg-3 fmxw-400">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Search orders">
                        </div>
                    </div>
                    <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                                <span class="small ps-3 fw-bold text-dark">Show</span>
                                <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
                                <a class="dropdown-item fw-bold" href="#">20</a>
                                <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body border-0 shadow table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-gray-200">#</th>
                            <th class="border-gray-200">Bill For</th>						
                            <th class="border-gray-200">Issue Date</th>
                            <th class="border-gray-200">Due Date</th>
                            <th class="border-gray-200">Total</th>
                            <th class="border-gray-200">Status</th>
                            <th class="border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 May 2020</span></td>                        
                            <td><span class="fw-normal">1 Jun 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-warning">Due</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456423
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Apr 2020</span></td>                        
                            <td><span class="fw-normal">1 May 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456420
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Mar 2020</span></td>                        
                            <td><span class="fw-normal">1 Apr 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456421
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Feb 2020</span></td>                        
                            <td><span class="fw-normal">1 Mar 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456420
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Jan 2020</span></td>                        
                            <td><span class="fw-normal">1 Feb 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456479
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Dec 2019</span></td>                        
                            <td><span class="fw-normal">1 Jan 2020</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Platinum Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Nov 2019</span></td>                        
                            <td><span class="fw-normal">1 Dec 2019</span></td>
                            <td><span class="fw-bold">$799,00</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    453673
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Gold Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Oct 2019</span></td>                        
                            <td><span class="fw-normal">1 Nov 2019</span></td>
                            <td><span class="fw-bold">$533,42</span></td>
                            <td><span class="fw-bold text-danger">Cancelled</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456468
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Gold Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Sep 2019</span></td>                        
                            <td><span class="fw-normal">1 Oct 2019</span></td>
                            <td><span class="fw-bold">$533,42</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>    
                        <!-- Item -->
                        <tr>
                            <td>
                                <a href="#" class="fw-bold">
                                    456478
                                </a>
                            </td>
                            <td>
                                <span class="fw-normal">Flexible Subscription Plan</span>
                            </td>
                            <td><span class="fw-normal">1 Aug 2019</span></td>                        
                            <td><span class="fw-normal">1 Sep 2019</span></td>
                            <td><span class="fw-bold">$233,42</span></td>
                            <td><span class="fw-bold text-success">Paid</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu py-0">
                                        <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                        <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                        <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>                                
                    </tbody>
                </table>
                <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
                </div>
            </div>
			
			
                        <div class="row justify-content-center pt-5 pb-4">
                            <div class="col-12 col-xl-8 text-center">
                                <h1 class="fw-extrabold text-center d-inline-flex align-items-center mb-4">
                                    Simple Product Extension Table 
                                    <svg class="icon icon-md ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path></svg>
                                </h1>
                                <p class="lead">Just a more simple table.</p>        
                            </div>
                        </div>  
                        <div class="row justify-content-center pb-4">
                            <div class="col-12 col-xl-8">
                                <div class="table-responsive">
                                    <table class="table comparison-table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th class="border-0 w-25"></th>
                                            <th class="border-0 ps-2 pb-4">Column 1</th>
                                            <th class="border-0 ps-2 pb-4">Column 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="w-25 rounded-start border-0 option">x</td>
                                        <td class="border-0">x</td>
                                        <td class="rounded-end border-0">x</td>
                                        </tr>
                                        <tr>
                                        <td class="option border-0">x</td>
                                        <td class="border-0">x</td>
                                        <td class="border-0">x</td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option">x</td>
                                        <td class="border-0">x</td>
                                        <td class="rounded-end border-0 ">x</td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option">x</td>
                                        <td class="border-0"><svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg></td>
                                            <td class="border-0"><svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option">x</td>
                                        <td class="border-0"><svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg></td>
                                            <td class="border-0"><svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
