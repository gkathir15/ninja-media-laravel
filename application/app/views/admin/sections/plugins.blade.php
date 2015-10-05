<table class="table plugins">
    <thead>
    <tr>
        <th>Plugin Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($plugins_available as $plugin)

            <?php $this_plugin = Plugin::where('slug', '=', $plugin['slug'])->first(); ?>
           
                <tr>
                    <td><h2 style="margin-bottom:0px; padding-bottom:0px;">{{ $plugin['name'] }} <span style="font-size:14px;">V.{{ $plugin['version'] }}</span></h2>
                        <small>{{ $plugin['description'] }}</small>
                    </td>
                    @if(!empty($this_plugin->active) && $this_plugin->active == 1) 
                        <td><p>Active</p></td>
                        <td><a href="plugin/deactivate/{{ $plugin['slug'] }}" class="btn btn-danger" style="display:inline; float:left; margin-right:10px;">De-activate</a><a href="plugin/{{ $plugin['slug'] }}" class="btn btn-success ajax" data-header="<i class='ion ion-outlet'></i> Plugin Settings" data-section="plugins"><i class="fa fa-cog"></i></a></td>
                    @else 
                        <td><p>Inactive</p></td>
                        <td><a href="plugin/activate/{{ $plugin['slug'] }}" class="btn btn-primary">Activate</a></td> 
                    @endif</p></td>
                   
                </tr>

        @endforeach

    </tbody>
</table>