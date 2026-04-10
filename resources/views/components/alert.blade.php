@if (session('success') || $errors->any())
    <div id="alertBox">

        {{-- SUCCESS --}}
        @if (session('success'))
            <div class="alert alert-success d-flex justify-content-between align-items-center">
                <span>{{ session('success') }}</span>

                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            </div>
        @endif

        {{-- ERRORS --}}
        @if ($errors->any())
            <div class="alert alert-danger d-flex justify-content-between align-items-start">
                <div>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            </div>
        @endif

    </div>
@endif
