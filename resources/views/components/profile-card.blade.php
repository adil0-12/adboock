<div class="col-sm-4">
    <div class="card">
        <img class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
            src="https://placehold.co/600x400" />
        <div class="card-body">
            <h4 class="card-title">{{ $profile->name }}</h4>
            <p class="card-text">{{ $profile->email }}</p>
            <p class="card-text">{{ Str::limit($profile->description, 50) }}</p>
            <a class="stretched-link"href="{{ route('profile.show', $profile->id) }}" role="button"></a>
        </div>
        <div class="card-footer" style="z-index:9">

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>

        </div>





        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Are you sure you wan to delete this object ?!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form action="{{ route('delete') }}" method="post">
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>





</div>
