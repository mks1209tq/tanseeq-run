<!DOCTYPE html>
<html>
<head>
    <title>Tanseeq Run - Registrations List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 100%;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .download-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
        }
        .download-btn:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .count {
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tanseeq Run - All Registrations</h2>
        
        <div class="count">Total Registrations: {{ $registrations->count() }}</div>
        
        <a href="/tanseeq-run/export" class="download-btn">Download as CSV</a>
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Registration ID</th>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Department/Projects</th>
                    <th>Entity</th>
                    <th>Date of Birth</th>
                    <th>Contact Number</th>
                    <th>UN Category</th>
                    <th>T-Shirt Size</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($registrations as $index => $r)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $r->registration_id ?? 'N/A' }}</td>
                    <td>{{ $r->employee_id }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->designation }}</td>
                    <td>{{ $r->company }}</td>
                    <td>{{ $r->entity }}</td>
                    <td>{{ $r->dob ? \Carbon\Carbon::parse($r->dob)->format('d/m/Y') : 'N/A' }}</td>
                    <td>{{ $r->contact_number }}</td>
                    <td>{{ $r->run_category }}</td>
                    <td>{{ $r->tshirt_size }}</td>
                    <td>{{ $r->created_at ? $r->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="12" style="text-align: center; padding: 20px; color: #999;">
                        No registrations found yet.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
