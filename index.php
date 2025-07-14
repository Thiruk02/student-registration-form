<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #fec494ff, #e96a0fff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px;
    }

    .card {
      width: 100%;
      max-width: 600px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(214, 32, 32, 0.3);
      background-color: #fff;
      padding: 30px;
    }

    .card h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
      color: #333;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #e0771cff;
    }

    .btn-primary {
      background-color: #c24f2dff;
      border: none;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #fe4203ff;
    }

    label {
      font-weight: 500;
    }

    .btn-secondary {
      margin-left: 10px;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>Student Registration</h2>
    <form action="insert.php" method="POST">
      <div class="mb-3">
        <label>Full Name</label>
        <input type="text" name="full_name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Date of Birth</label>
        <input type="date" name="dob" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Gender</label>
        <select name="gender" class="form-select" required>
          <option value="">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label>Degree</label>
        <input type="text" name="degree" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>College</label>
        <input type="text" name="college" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Graduation Date</label>
        <input type="date" name="graduation" class="form-control" required>
      </div>

      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="view.php" class="btn btn-secondary">View Records</a>
      </div>
    </form>
  </div>

</body>
</html>
