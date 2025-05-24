<div class="col-sm-4">
        <div class="card"style="">
           <img class="" src="{{asset('images/ADIL.png')}}"   />
                       <div class="card-body">
                <h4 class="card-title">{{ $profile->name }}</h4>
                <p class="card-text">{{ $profile->email }}</p>
                <p class="card-text" >{{ Str::limit($profile->description,50)}}</p>
                <a class="stretched-link"href="{{ route('profile.show', $profile->id) }}" role="button"></a>
            </div>
        </div>
    
</div>  

