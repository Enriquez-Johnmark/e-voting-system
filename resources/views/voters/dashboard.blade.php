@extends('layouts.template')
@section('pageTitle','Dashboard')
@section('content')
  <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">

                        <h3 class="kt-subheader__title">
                            Voter Dashboard       
                                                
                        </h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                        </div>
                           
    </div>
  </div>
  <div id="product_content"> 
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">										
					<!-- begin:: Content -->
          <br>
          <h3>Hi, {{ auth()->user()->firstname}} {{ auth()->user()->lastname}}</h3>
          <br><br><br><br>
          
          @if($voteFemales->isNotEmpty() || $voteMales->isNotEmpty())
          <h1>Thanks for voting, your vote has been recorded.</h1>
          <div>
            <br><br>
            <h4>Your Ballot Receipt:</h4>
            <br>
            @foreach($voteFemales as $female)
              <h4>Female Category:</h4>
              <h5>{{$female->candidate->firstname}} {{$female->candidate->lastname}}</h5>
            @endforeach
              <br>
            @foreach($voteMales as $male) 
              <h4>Male Category:</h4>
              <h5>{{$male->candidate->firstname}} {{$male->candidate->lastname}}</h5>
            @endforeach
          </div>

          @else
          <center><button class="btn btn-outline-primary btn-pill btn-elevate" type="button" id="add_votes"><h1>Please Click here to Start Voting</h1></button></center>

          @endif
          <!-- <center><button class="btn btn-outline-primary btn-pill btn-elevate" type="button" id="add_votes"><h1>Please Click here to Start Voting</h1></button></center> -->

          

          
      
<!-- end:: Content -->				</div>
  </div>

@push('script')

<!-- End:: Organization Script -->

<!-- <script type="text/javascript">
$('#addProduct').on('shown.bs.modal', function () {
        // basic
        $('.my-select').select2({
            
        });
            });

</script> -->
<script>
$('#add_votes').click(function () {
    $('#product_content').load("{{ route('voter.candidate')}}");
});
</script>

@endpush


@endsection