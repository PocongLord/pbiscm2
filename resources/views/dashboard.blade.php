<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <style>
        .responsive-iframe-container {
          position: relative;
          overflow: hidden;
          padding-bottom: 56.25%; /* 16:9 aspect ratio (change this value based on your iframe's aspect ratio) */
        }
      
        .responsive-iframe-container iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      </style>
      
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="responsive-iframe-container">
              <iframe title="POWER BI MKP V.1.3 - PROD - LIVE - MANDIRICOAL" src="https://app.powerbi.com/view?r=eyJrIjoiMzVlZDZhYzktODUzZC00Y2EzLWJkMWYtMmExY2U4NTYxNTU0IiwidCI6ImRhNWZlYzcyLThkNzEtNDA3YS1iNDlhLTE2MjEyZjJlYTk4NiIsImMiOjEwfQ%3D%3D&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>
