@props(['brawlers'])
@foreach ($brawlers as $brawler)
<div
                id="w-node-df7237d1-7bfc-9486-5e82-047cdc13082d-dc13082c"
                class="div-block-3"
            >
                <div class="div-block-2">
                    <img
                        src="https://cdn.brawlify.com/brawler/{{$brawler->brawler->name}}.png?v=1"
                        loading="lazy"
                        width="178"
                        height="178"
                        alt=""
                        class="image"
                    />
                    <div class="text-block">{{$brawler->brawler->name}}</div>
                </div>
                <ol role="list" class="list w-list-unstyled">
                    <li class="list-item">
                        <span class="text-span">win rate<br></span
                        ><span class="text-span-4">{{($brawler->win_rate * 100).'%'}}</span>
                    </li>
                    <li class="list-item">
                        <span class="text-span-2">rank</span><br /><span
                            class="text-span-5"
                            >{{$brawler->win_rate_rank}}</span
                        >
                    </li>
                    <li class="list-item">
                        <span class="text-span"> pick rate<br /></span
                        ><span class="text-span-4">{{($brawler->pick_rate * 100).'%'}}</span>
                    </li>
                    <li class="list-item">
                        <span class="text-span-2">rank</span><br /><span
                            class="text-span-5"
                            >{{$brawler->pick_rate_rank}}</span
                        >
                    </li>
                </ol>
            </div>
@endforeach            