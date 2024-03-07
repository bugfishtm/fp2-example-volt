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
	<link
	  rel="stylesheet"
	  href="<?php echo _HIVE_URL_REL_; ?>/_core/_vendor/chartjs/Chart.min.css"
	/>
	<script
	  src="<?php echo _HIVE_URL_REL_; ?>/_core/_vendor/chartjs/Chart.min.js"
	  defer
	></script>		
	<script src="<?php echo _HIVE_URL_REL_; ?>/_core/_vendor/chartjs/example_charts-lines.js" defer></script>
	<script src="<?php echo _HIVE_URL_REL_; ?>/_core/_vendor/chartjs/example_charts-bars.js" defer></script>
	<script src="<?php echo _HIVE_URL_REL_; ?>/_core/_vendor/chartjs/example_charts-pie.js" defer></script> 

           <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Volt</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $object["lang"]->translate("chart_charts"); ?></li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4"><?php echo $object["lang"]->translate("chart_charts"); ?></h1>
                        <p class="mb-0">              <?php echo $object["lang"]->translate("chart_1"); ?>
              <a
                class="text-bugfish-primary-600 dark:text-bugfish-primary-6000 hover:underline"
                href="https://www.chartjs.org/"
              >
                Chart.js
              </a>
              <?php echo $object["lang"]->translate("chart_2"); ?></p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
 <div class="container px-6 mx-auto grid mb-0 pb-0">



            <div class="grid gap-6 mb-8 md:grid-cols-2">
              <!-- Doughnut/Pie chart -->
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                 <?php echo $object["lang"]->translate("chart_pie"); ?>
                </h4>
                <canvas id="pie"></canvas>
                <div
                  class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                >
                  <!-- Chart legend -->
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
                    ></span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                    ></span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-primary-bugfish rounded-full"
                    ></span>
                  </div>
                </div>
              </div><br />
              <!-- Lines chart -->
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  <?php echo $object["lang"]->translate("chart_line"); ?>
                </h4>
                <canvas id="line"></canvas>
                <div
                  class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                >
                  <!-- Chart legend -->
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                    ></span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-primary-bugfish rounded-full"
                    ></span>
                  </div>
                </div>
              </div><br />
              <!-- Bars chart -->
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  <?php echo $object["lang"]->translate("chart_bar"); ?>
                </h4>
                <canvas id="bars"></canvas>
                <div
                  class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                >
                  <!-- Chart legend -->
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
                    ></span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-primary-bugfish rounded-full"
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>



