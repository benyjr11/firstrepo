
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
         ._regisse{
    background-image: url(1cb4ac2b-0c3d-4af3-b4d6-7c9c1fd1a498.JPG);
    }
    ._klssi{
      width: 85%;
     
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="py-5 _regisse">
   <div class="container">
<div class="row">
    <div class="col-lg-6">
        <h3>JOIN US </h3>
        <P class="fs-3">Welcome to the future of gadgets! By signing in, you unlock a personalized experience designed to keep you <br> connected with the latest innovations.</P>
        <h3 class="py-5">
            WHY REGISTER WITH US?
        </h3>
        <ul class="fs-4">
            <li>- Exclusive Access: Browse our full catalog of cutting‑edge gadgets.</li>
            <li>
                - Personalized Dashboard: See recommendations tailored to your interests.
            </li>
            <li>
                - Seamless Shopping: Save your favorite products and track your orders effortlessly
            </li>
            <li>
                - Early Updates: Be the first to know about new arrivals, special deals, and limited‑edition releases.
            </li>
        </ul>
    </div>
    <div class="col-lg-6 _klssi">
        <form action="process.php" method="post" class="p-4 border rounded bg-good shadow-sm _klssi ">
            
            <!-- Name -->
            <div class="mb-3 py-2">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" id="name" name="name" class="form-control bg-transparent" required style="width: 70%;">
            </div>
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control bg-transparent" required style="width: 70%;">>
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control bg-transparent" required style="width: 70%;">>
            </div>
            <!-- Phone Number -->
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control bg-transparent" pattern="[0-9]{10,15}" required style="width: 70%;">>
              <div class="form-text">Enter 10–15 digits without spaces.</div>
            </div>
            <!-- Gender -->
            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select id="gender" name="gender" class="form-select bg-transparent" required style="width: 70%;">>
                <option value="">--Select--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <!-- Submit -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary" style="width: 70%;">>Register</button>
            </div>
          </form>
    </div>





</div>
   </div>

   <div class="py-5 my-5"> 
    <video src="Download.mp4" type="video/mp4" style="height: 50%; width:50%;"></video>


   </div>
    </section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
