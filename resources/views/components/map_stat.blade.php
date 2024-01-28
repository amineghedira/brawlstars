@props(['maps'])
@foreach ($maps as $map)
<div
                id="w-node-_3212cb1e-4ef8-a7da-7a9a-1be7bce5864c-18eb5b3d"
                class="div-block-3"
            >
                <div class="div-block-2">
                    <img
                        src="https://cdn.brawlify.com/map/{{$map->name}}.png?v=6"
                        loading="lazy"
                        width="178"
                        height="178"
                        alt=""
                        class="image"
                    />
                    <ol role="list" class="list w-list-unstyled">
                        <li class="list-item">
                            <span class="text-span"> pick rate<br /></span
                            ><span class="text-span-4">{{($map->pick_rate * 100).'%'}}</span>
                        </li>
                        <li class="list-item">
                            <span class="text-span-2">rank</span><br /><span
                                class="text-span-5"
                                >{{$map->pick_rate_rank}}</span
                            >
                        </li>
                        <li class="list-item-2">
                            <span class="text-span-3">mode</span><br /><span
                                class="text-span-6"
                                >{{$map->mode->name}}</span
                            >
                        </li>
                    </ol>
                </div>
                <div class="text-block">{{$map->name}}</div>
            </div>
            
@endforeach            