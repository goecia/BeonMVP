@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/admin/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <!-- LEFT -->
    <div id="left" class="col-sm-3"></div>
    <!-- MIDDLE -->
    <div id="middle" class="col-sm-6">
        <form id="post-form" name="post-form" enctype="application/x-www-form-urlencoded" action="" method="POST">
            <!-- POST OPTIONS -->
            <div class="text-center">
                Title: <input type="text" name="post-title" id="post-title" placeholder="Title..." autocomplete="off" />
                <input class="btn btn-default" type="button" name="save-button" onclick="saveEntry();" value="SAVE" />
            </div>

            <!-- WYSIWYG OPTIONS -->
            <div class="teheader">
                <div onmousedown="event.preventDefault();" onclick="execute('bold');" class="button-bold" title="Bold"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('italic');" class="button-italic" title="Italic"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('underline');" class="button-underline" title="Underline"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('strikethrough');" class="button-strikethrough" title="Strikethrough"></div>
                <div class="tedivider"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('insertOrderedList');" class="button-ordered-list" title="Insert Ordered List"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('insertUnorderedList');" class="button-unordered-list" title="Insert Unordered List"></div>
                <div class="tedivider"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('outdent');" class="button-outdent" title="Outdent"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('indent');" class="button-indent" title="Indent"></div>
                <div class="tedivider"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('justifyLeft');" class="button-justify-left" title="Left Align"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('justifyCenter');" class="button-justify-center" title="Center Align"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('justifyRight');" class="button-justify-right" title="Right Align"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('justifyFull');" class="button-justify-full" title="Block Justify"></div>
                <div class="tedivider"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('undo');" class="button-undo" title="Undo"></div>
                <div onmousedown="event.preventDefault();" onclick="execute('redo');" class="button-redo" title="Redo"></div>
                <div class="tedivider"></div>
                <div onmousedown="event.preventDefault();" onclick="createLink();" class="button-create-link" title="Hyperlink"></div>
                <label for="file-input">
                    <!-- <div onmousedown="event.preventDefault();" class="button-image" title="Upload Image">
                        <input type="file" id="file-input" name="file-input">
                    </div> -->
                </label>
            </div>
            <!-- TEXT CONTENT -->
            <textarea id="textarea" name="textarea" hidden></textarea>
            <div id="iframe" name="iframe" class="iframe" contenteditable="true" spellcheck="false"></div>
            <!-- STATUS -->
            <div id="status" class="status"></div>
        </form>
    </div>
    <!-- RIGHT -->
    <div id="right" class="col-sm-3"></div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/admin/blog.js') }}"></script>
@endsection
