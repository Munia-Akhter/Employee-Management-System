<!DOCTYPE html>
<html>
<head>
  <title>EMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     table th,tr,td{

        text-align: center;
     }

  </style>
</head>
<body>


@include('header')
<div class="container">
    <h1 class="well">Vehicle Informations</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="{{ url('update_v',array($vehicles->v_id)) }}" method="post" >
        {{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Vehicle Number</label><span class="error">*</span>
                <input type="text" placeholder="Enter Vehicle Number Here.." class="form-control" 
                name="no_car" value="{{ $vehicles->no_car }}" readonly>
              </div>

              <div class="form-group">
                <label>RP(Road Permit):Due Date</label><span class="error">*</span>
                <input type="date" placeholder="Enter RP Due Date Here.." class="form-control" 
                name="rp" value="{{ $vehicles->rp_due }}" required>
              </div>


              <div class="form-group">
                <label>FC(Fitness):Due Date</label><span class="error">*</span>
                <input type="date" placeholder="Enter FC Due Date Here.." class="form-control" 
                name="fc" value="{{ $vehicles->fc_due }}" readonly>
              </div>
              
             <div class="form-group">
               <label>TT(Tax Token):Due Date</label><span class="error">*</span>
               <input type="date" placeholder="Enter TT Due Date Here.." class="form-control" 
               name="tt" value="{{ $vehicles->tt_due }}" required>
             </div>   

             <div class="form-group">
             <label>IC(Insurance):Due Date</label><span class="error">*</span>
             <input type="date" placeholder="Enter IC Due Date Here.." class="form-control" 
             name="ic" value="{{ $vehicles->ic_due }}" required>
             </div>  

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
        </div>
  </div>
</div>

@include('footer')

</body>
</html>