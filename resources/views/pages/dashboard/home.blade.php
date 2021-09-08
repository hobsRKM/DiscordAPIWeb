<section>
    <div class="row justify-content-center">
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div class="bot-status align-self-center">
                            <i class="fas fa-toggle-on"></i>
                        </div>
                        <div class="text-end">
                            <h3>Bot</h3>
                            <p class="mb-0">Online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="card">
        <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Console</strong></h5>
        </div>

        <div class="card-body">
              <pre class="console-info">
                 <code class="">
                    1. Start the bot ````$ php bot.php```` in one terminal (screen if linux)
                    2. Start the scoket server ````$ cd /projectroot/server/node app.js```` in another terminal (screen if linux)
                    3. Check the below console (Send a test message from discord server where bot is online)
                 </code>
            </pre>
            @include('components.console.console')
            <p class="lead text-center">
                This console can be used in realtime to inspect the bot incoming events, helps you to build bots faster.
            </p>
        </div>

    </div>

</section>
</div>

