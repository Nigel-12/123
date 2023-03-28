@include('partials.header')

<form class="needs-validation" action="edit/" method= "POST">
    @csrf
    @method('PUT')
 
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="lastName">LastName</label>
      <input type="text" class="form-control" id="lastName" value="{{$customer['lastName']}}">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstName">firstName</label>
      <input type="text" class="form-control" id="firstName" value="{{$customer['firstName']}}">
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" value="{{$customer['email']}}">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="lastName">Address</label>
      <input type="text" class="form-control" id="lastName" value="{{$customer['address']}}">
    </div>
   
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check if all details are correct
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@include('partials.footer')