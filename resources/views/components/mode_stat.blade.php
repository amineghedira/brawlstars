@props(['modes'])
@foreach ($modes as $mode)
<div
                id="w-node-df7237d1-7bfc-9486-5e82-047cdc13082d-dc13082c"
                class="div-block-3"
            >
                <div class="div-block-2">
                    <img
                        src="https://cdn.brawlify.com/gamemode/{{$mode->name}}.png?v=1"
                        loading="lazy"
                        width="178"
                        height="178"
                        alt=""
                        class="image"
                    />
                    <ol role="list" class="list w-list-unstyled">
                        <li class="list-item">
                            <span class="text-span">pick rate </span
                            ><span class="text-span-4">{{($mode->pick_rate * 100).'%'}}</span>
                        </li>
                        <li class="list-item">
                            <span class="text-span-2">rank</span><br /><span
                                class="text-span-5"
                                >{{$mode->pick_rate_rank}}</span
                            >
                        </li>
                    </ol>
                </div>
                <div class="text-block">{{$mode->name}}</div>
            </div>
@endforeach            