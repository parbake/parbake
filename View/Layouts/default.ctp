<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework'); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            The Parbake Project:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('cake.generic');
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('parbake.theme.css');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    </head>
    <body>
        
        <?php echo $this->element('navbar'); ?>

        <div class="container">
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

            <div class="footer text-right">
            <?php echo $this->Html->link(
                    $this->Html->image('cake.power.gif', 
                    array(
                        'alt' => $cakeDescription, 
                        'title'=> $cakeDescription,
                        'border' => '0')),
                    'http://www.cakephp.org/',
                    array('target' => '_blank', 'escape' => false)
                );
            ?>
            </div>
            <?php echo $this->element('sql_dump'); ?>
            
        </div>
        <?php echo $this->Html->script('jquery/jquery'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>
        <?php if(isset($this->request->hasEditor)): ?>
            <?php echo $this->Html->script('tinymce/tinymce.min'); ?>
            <script>
                tinymce.init({
                    selector: '.editor',
                    content_css : '/theme/parbake/css/editor.css',
                    plugins: 'autoresize, code',
                    menubar: false,
                    toolbar: "undo redo | styleselect | bold italic | numlist bullist | code"
                });
            </script>
        <?php endif; ?>

        
    </body>
</html>
