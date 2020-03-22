  <?php $__env->startSection('title'); ?>
      Employee info
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('content'); ?>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 20px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 10px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
  <div class="content-page">
    <div class="content">
        <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                          <form id="regForm" method="POST" action="<?php echo e(route('employeeinfo_create')); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Employee Information
    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
    <p><input type="file" placeholder="Image..." oninput="this.className = ''" name="emp_image"></p>
    <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="emp_fname"></p>
    <p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="emp_lname"></p>

    <!-- <p><input id="phoneInput" name="phone" name='emp_phone1' class="form-control mt-1 block w-full" placeholder="Phone number ..." maxlength="11" value=""></p>
    <p><input id="phoneInput" name="phone" name='emp_phone2' class="form-control mt-1 block w-full" placeholder="Phone number ..." maxlength="11" value=""></p> -->

    <p><input id="phoneInput" type="number" placeholder="Phone number ..." oninput="this.className = ''" name="emp_phone1" maxlength="11"></p>
    <p><input id="phoneInput" type="number" placeholder="Alternative phone number..." oninput="this.className = ''" name="emp_phone2" maxlength="11"  ></p>

    <p><input type="email" placeholder="Email..." oninput="this.className = ''" name="emp_email"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input type="number" placeholder="NID number..." oninput="this.className = ''" name="employee_nid"></p>



    <p><input type="date" placeholder="Birth Date..." oninput="this.className = ''" name="emp_birth_date"></p>
    <p><input type="text" placeholder="Present Address..." oninput="this.className = ''" name="emp_preaddress"></p>
    <p><input type="text" placeholder="Permanent Address..." oninput="this.className = ''" name="emp_peraddress"></p>
    <p><input type="text" placeholder="Marital Status..." oninput="this.className = ''" name="emp_marital_status"></p>

  </div>
  <div class="tab">Emergency Information
    <p><input type="text" placeholder="Emergency Name..." oninput="this.className = ''" name="emrgncy_name"></p>
    <p><input id="phoneInput" type="phone" placeholder="Emergency Phone number..." oninput="this.className = ''" name="emrgncy_phone" maxlength="11"></p>
    <!-- <p><input type="number" placeholder="Emergency Phone number..." oninput="this.className = ''" name="emrgncy_phone"></p> -->
    <p><input type="text" placeholder="Relation..." oninput="this.className = ''" name="emrgncy_relation"></p>
    <p><input type="text" placeholder="Address..." oninput="this.className = ''" name="emrgncy_address"></p>

  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rimu360\Downloads\NewProject-master-master-20191231T163411Z-001\NewProject-master-master\resources\views/employee/test.blade.php ENDPATH**/ ?>