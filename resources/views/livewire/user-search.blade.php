<div>
    <style>
        .search-result {
            z-index: 1000;
            position: absolute;
        }
    </style>

    <form class="row g-3 m-5 p-5" @submit.prevent="console.log('submitted')" x-data="{searchResultOpen: false}">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="input-group mb-1" x-cloak>
                        <input type="text" class="form-control" placeholder="{{ __('Search ...') }}"
                            x-on:input.debounce.400ms="searchResultOpen = ($event.target.value != '')"
                            x-on:click="searchResultOpen = ($event.target.value != '')"
                            wire:model.debounce.500ms="search" aria-label="Search input" aria-describedby="search-icon"
                            wire:keydown.escape="clearSearchInput('')" @keyup.prevent.enter="alert('Submitted!')"
                            autocomplete="off">
                        <span class="input-group-text" id="search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>

                        <button class="input-group-text" @click="searchResultOpen = ! searchResultOpen"
                            title="{{ __('Show search result') }}" type="button">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </button>
                    </div>
                    {{-- search box --}}
                    {{-- x-show="searchResultOpen"
                    @click.away="searchResultOpen = false" --}}
                    <div x-show="searchResultOpen" @click.outside="searchResultOpen = false" class="search-result"
                        x-cloak>
                        <div>
                            @forelse($users as $user)
                            <div>
                                <ul class="list-group">
                                    {{-- <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                                    --}}
                                    <li
                                        class="list-group-item list-group-item-action" wire:click="selectUser({{ $user }})"
                                        @click="searchResultOpen = false"
                                        style="cursor: pointer;">
                                        {{Str::limit($user->name, 40)}}
                                        {{$user->email}}
                                    </li>
                                </ul>
                            </div>
                            @empty
                            <div x-cloak>
                                {{$isEmpty}}
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $selected_user['id'] ?? null }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $selected_user['name'] ?? null }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $selected_user['email'] ?? null }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-12">
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptate nulla numquam sapiente,
                inventore ipsa, explicabo ducimus accusamus culpa esse, exercitationem error odio commodi! Eius expedita
                nobis incidunt cum ea!</h5>
        </div>
    </form>

</div>
