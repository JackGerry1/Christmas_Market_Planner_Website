<!-- Insert Header PHP Code -->
<?php 
    include_once 'templates/header.php';    
?>
<div class="main-content"> 
    <!-- Currency Converter Form -->
      <div class="form-container">
      <form action="#">
                <div class="amount">
                    <p id="label-header">Currency Converter</p>
                    <!-- Allows user to enter amount to be converted. -->
                    <input id="input-text" type="text" value="1" />
                </div> <!-- .amount -->
                <div class="drop-list">
                    <div class="from">
                         <!-- Allows user to choose amount currency -->
                        <p id="label">From</p>
                        <div class="select-box">
                            <img
                                src="https://flagcdn.com/48x36/gb.png"
                                alt="flag"
                            />
                            <select>
                                <!-- Options tag are inserted from JavaScript -->
                            </select>
                        </div> <!-- .select-box -->
                    </div> <!-- .from -->
                    <div class="icon"><i class="fas fa-exchange-alt"></i></div>
                    <div class="to">
                        <!-- Allows user to selected currency to be converted to. -->
                        <p id="label">To</p>
                        <div class="select-box">
                            <img
                                src="https://flagcdn.com/48x36/eu.png"
                                alt="flag"
                            />
                            <select class="to-select">
                                <!-- Options tag are inserted from JavaScript -->
                            </select>
                        </div> <!-- .select-box -->
                    </div> <!-- .to -->
                </div> <!-- .drop-list -->
                <!-- Temporary Text whilst amount is being converted -->
                <div class="exchange-rate">Getting exchange rate...</div>
                <button>Get Exchange Rate</button>
            </form>
    </div> <!-- .form-container --> 
     <!-- Currency Converter JS scripts -->           
      <script src="scripts/country_list_script.js"></script>
      <script src="scripts/currency_converter_script.js"></script>        
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->    
<?php 
  include_once 'templates/footer.php';    
?>
