<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1528100755,
    'checksum' => '99715584bc910fc043a52de4d1402472',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1519665542
            ],
            'plugins/mediaembed' => [
                'file' => 'user/config/plugins/mediaembed.yaml',
                'modified' => 1519665545
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1519665542
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1519665542
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1519665542
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1527840629
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1528035391
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1528035391
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1528035391
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1528035391
            ]
        ],
        'user/plugins' => [
            'plugins/mediaembed' => [
                'file' => 'user/plugins/mediaembed/mediaembed.yaml',
                'modified' => 1523369488
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/youtube.yaml',
                'modified' => 1528100754
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1528035428
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1528035426
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1528035423
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1528035418
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1528035421
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1519665550
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/external_links.yaml',
                'modified' => 1519666964
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1519665558
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'mediaembed' => [
                'enabled' => true,
                'link' => false,
                'built_in_css' => true,
                'built_in_js' => true,
                'media' => [
                    'width' => 640,
                    'height' => 390,
                    'adjust' => true,
                    'preview' => true,
                    'responsive' => true,
                    'protocol' => 'http://'
                ],
                'services' => [
                    'SoundCloud' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'example' => 'https://soundcloud.com/semiseria/verruckert-ausschnitt',
                        'url' => 'w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/{:id}',
                        'canonical' => 'http://soundcloud.com/{:id}',
                        'endpoint' => 'http://soundcloud.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'soundcloud.com/*',
                            1 => 'soundcloud.com/*/*',
                            2 => 'soundcloud.com/*/sets/*',
                            3 => 'soundcloud.com/groups/*',
                            4 => 'snd.sc/*'
                        ],
                        'params' => [
                            'auto_play' => false,
                            'buying' => true,
                            'download' => true,
                            'hide_related' => false,
                            'liking' => true,
                            'sharing' => true,
                            'show_artwork' => true,
                            'show_comments' => true,
                            'show_playcount' => true,
                            'show_user' => true,
                            'visual' => false
                        ]
                    ],
                    'Spotify' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://open.spotify.com/track/{:id}',
                        'endpoint' => 'https://embed.spotify.com/oembed/?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'open.spotify.com/track/*',
                            1 => 'spoti.fi/*'
                        ]
                    ],
                    'Flickr' => [
                        'enabled' => true,
                        'type' => 'photo',
                        'canonical' => 'http://www.flickr.com/photos/{:id}',
                        'endpoint' => 'http://flickr.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'flickr.com/photos/*',
                            1 => 'flic.kr/*'
                        ]
                    ],
                    'Imgur' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://imgur.com/gallery/{:id}',
                        'endpoint' => 'http://api.imgur.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'imgur.com/gallery/*',
                            1 => 'imgur.com/a/*',
                            2 => 'imgur.com/*'
                        ]
                    ],
                    'Instagram' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://instagram.com/p/{:id}',
                        'endpoint' => 'http://api.instagram.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'instagr.am/p/*',
                            1 => 'instagram.com/p/*'
                        ]
                    ],
                    'Dailymotion' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.dailymotion.com/embed/video/{:id}',
                        'canonical' => 'http://dailymotion.com/video/{:id}',
                        'endpoint' => 'http://www.dailymotion.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'dailymotion.com/video/*',
                            1 => 'dailymotion.com/*/video/*',
                            2 => 'dai\\.ly/*'
                        ],
                        'params' => [
                            'quality' => 1080
                        ]
                    ],
                    'YouTube' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.youtube.com/embed/{:id}',
                        'canonical' => 'http://www.youtube.com/watch?v={:id}',
                        'endpoint' => 'http://www.youtube.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'youtube.com/watch?*v=*',
                            1 => 'youtube.com/embed/*',
                            2 => 'youtube.com/v/*',
                            3 => 'youtube.com/?*v=*',
                            4 => 'youtu.be/*'
                        ],
                        'params' => [
                            'autoplay' => 0,
                            'modestbranding' => 1,
                            'theme' => 'light'
                        ]
                    ],
                    'Vimeo' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'player.vimeo.com/video/{:id}',
                        'canonical' => 'https://vimeo.com/{:id}',
                        'endpoint' => 'http://vimeo.com/api/oembed.json?url={:canonical}',
                        'schemes' => [
                            0 => 'vimeo.com/*',
                            1 => 'vimeo.com/channels/*/*',
                            2 => 'vimeo.com/groups/*/videos/*'
                        ],
                        'params' => [
                            'autoplay' => 0
                        ]
                    ],
                    'Github' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'https://gist.github.com/{:id}',
                        'endpoint' => 'https://gist.github.com/{:id}.json',
                        'schemes' => [
                            0 => 'gist.github.com/*',
                            1 => 'gist.github.com/*/*',
                            2 => 'gist.github.com/*?*'
                        ]
                    ],
                    'Slides' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://slides.com/{:id}',
                        'endpoint' => 'http://slides.com/{:id}',
                        'schemes' => [
                            0 => 'slides.com/*',
                            1 => 'slid.es/*'
                        ],
                        'params' => [
                            'style' => 'light',
                            'width' => 1920,
                            'height' => 1400
                        ]
                    ],
                    'Twitter' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'https://twitter.com/{:id}',
                        'endpoint' => 'https://api.twitter.com/1/statuses/oembed.json?url={:canonical}',
                        'schemes' => [
                            0 => 'twitter.com/*',
                            1 => 'twitter.com/*/*'
                        ]
                    ],
                    'GitHub' => [
                        'enabled' => true
                    ]
                ]
            ],
            'youtube' => [
                'enabled' => true,
                'built_in_css' => true,
                'add_editor_button' => true,
                'player_parameters' => [
                    'autoplay' => 0,
                    'cc_load_policy' => 0,
                    'color' => 'red',
                    'controls' => 1,
                    'disablekb' => 0,
                    'enablejsapi' => 0,
                    'fs' => 1,
                    'hl' => '',
                    'iv_load_policy' => 1,
                    'loop' => 0,
                    'modestbranding' => 0,
                    'origin' => '',
                    'playsinline' => 0,
                    'rel' => 1,
                    'showinfo' => 1,
                    'vq' => 'default'
                ],
                'privacy_enhanced_mode' => false
            ],
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both'
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'sendmail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'external_links' => [
                'enabled' => true,
                'built_in_css' => true,
                'weight' => 0,
                'exclude' => [
                    'classes' => [
                        0 => 'exclude'
                    ],
                    'domains' => NULL
                ],
                'links' => [
                    'www' => false,
                    'redirects' => false,
                    'schemes' => [
                        0 => 'http',
                        1 => 'https',
                        2 => 'ftp',
                        3 => 'irc',
                        4 => 'mailto',
                        5 => 'news',
                        6 => 'nntp',
                        7 => 'rtsp',
                        8 => 'sftp',
                        9 => 'ssh',
                        10 => 'tel',
                        11 => 'telnet',
                        12 => 'webcal'
                    ]
                ],
                'process' => true,
                'title' => false,
                'no_follow' => true,
                'target' => '_blank',
                'mode' => 'active'
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'I.S.C.R.A.',
            'default_lang' => 'fr',
            'author' => [
                'name' => 'Iscra',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'Actualites',
                1 => 'Themes',
                2 => 'Interventions',
                3 => 'Medias'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 250,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ],
            'myfield' => 'plop'
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    0 => 'fr'
                ],
                'include_default_lang' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'starter',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '1',
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 33554432
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => 'W6AY4N9vwjFTQP'
        ]
    ]
];
