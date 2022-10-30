<table border="2">
<thead>
                <tr>
                    <th>SL#</th>
                    <th>Color Name</th>
                    <th>Color Code</th>


                    <th>Description</th>
                    <th>Active Status</th>
                   
                
                </tr>
            </thead>
            <tbody>
                @foreach( $colors as $color)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $color->name }}</td>
                    
                    <td style="color:{{ $color->color_code }}"> {{ $color->color_code }}</td>

                    <td>
                        {!!$color->description!!}
                    </td>

                    <td>{{ $color->is_active? 'Yes' : 'No' }}

                    </td>
                    
                   
                </tr>
                @endforeach
            </tbody>
</table>