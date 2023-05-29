<!-- Insert Header PHP Code -->
<?php 
    include_once 'templates/header.php';    
?>
<div class="main-content">
<div class="detailed-container">
        <div class="detailed-content">
            <h1 class="heading">Saving Costs Tips</h1>
            <p class="text-info">Choosing cheaper food venues, such as the Hog stall and Bratwurst stall will save you money.<br>There is also a family discount at Saltram Festive Event for two adults and three children.</p>
        </div> <!-- .detailed-content -->
    </div> <!-- .detailed-container -->
    <div class="breaker"></div>  
<div class="price-container">
            <form>
                <div class="form-group">
                    <p id="label-header">Price Calculator</p>
                    <label for="venue" class="form-label">Venue:</label>
                    <br />
                    <select id="venue" class="form-control-select">
                        <option value="1">Marco Pierre White</option>
                        <option value="2">Hog Roast Stall</option>
                        <option value="3">Bratwurst Stall</option>
                        <option value="4">Mount Edgecombe</option>
                        <option value="5">Santa's Grotto</option>
                        <option value="6">Saltram Festive Event</option>
                    </select>
                </div> <!-- .form-group -->
                <div class="form-group">
                    <label for="adults" class="form-label">Adults:</label>
                    <br />
                    <input type="text" id="adults" class="form-control" placeholder="Enter Number Of Children" />
                </div> <!-- .form-group -->
                <div class="form-group">
                    <label for="children" class="form-label">Children:</label>
                    <br />
                    <input type="text" id="children" class="form-control" placeholder="Enter Number Of Adults" />
                </div> <!-- .form-group -->
                <div class="form-group">
                    <button type="button" id="calculate" class="form-control price-button">Calculate</button>
                </div> <!-- .form-group -->
            </form>
            <div id="result"></div> 
        </div> <!-- .price-container -->    
    <script src="scripts/pricing_script.js"></script>
</div> <!-- .main-content -->
<!-- Insert Footer PHP Code -->
<?php 
  include_once 'templates/footer.php';    
?>