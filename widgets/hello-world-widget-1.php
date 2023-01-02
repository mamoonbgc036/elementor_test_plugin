<?php
    // class Elementor_Hello_World_Widget_1 extends \Elementor\Widget_Base{

    //     public function get_name() {
    //         return 'hello_world_widget_1';
    //     }

    //     public function get_title() {
    //         return esc_html__('Hello World 1', 'elementor-addon');
    //     }

    //     public function get_icon() {
    //         return 'eicon-code';
    //     }

    //     public function get_categories() {
    //         return ['basic'];
    //     }

    //     public function get_keywords() {
    //         return ['hello', 'world'];
    //     }

    //     protected function render() {
?>

<!-- <p> Hello World </p> -->

<?php
    // }
    // }

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    /**
     * Elementor oEmbed Widget.
     *
     * Elementor widget that inserts an embbedable content into the page, from any given URL.
     *
     * @since 1.0.0
     */
    class Elementor_oEmbed_Widget extends \Elementor\Widget_Base{

        /**
         * Get widget name.
         *
         * Retrieve oEmbed widget name.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget name.
         */
        public function get_name() {
            return 'mamoon';
        }

        /**
         * Get widget title.
         *
         * Retrieve oEmbed widget title.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget title.
         */
        public function get_title() {
            return esc_html__('mamoon', 'elementor-oembed-widget');
        }

        /**
         * Get widget icon.
         *
         * Retrieve oEmbed widget icon.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget icon.
         */
        public function get_icon() {
            return 'eicon-code';
        }

        /**
         * Get custom help URL.
         *
         * Retrieve a URL where the user can get more information about the widget.
         *
         * @since 1.0.0
         * @access public
         * @return string Widget help URL.
         */
        public function get_custom_help_url() {
            return 'https://developers.elementor.com/docs/widgets/';
        }

        /**
         * Get widget categories.
         *
         * Retrieve the list of categories the oEmbed widget belongs to.
         *
         * @since 1.0.0
         * @access public
         * @return array Widget categories.
         */
        public function get_categories() {
            return ['general','TEXT'];
        }

        /**
         * Get widget keywords.
         *
         * Retrieve the list of keywords the oEmbed widget belongs to.
         *
         * @since 1.0.0
         * @access public
         * @return array Widget keywords.
         */
        public function get_keywords() {
            return ['oembed', 'url', 'link'];
        }

        /**
         * Register oEmbed widget controls.
         *
         * Add input fields to allow the user to customize the widget settings.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function register_controls() {

            $this->start_controls_section(
                'content_section',
                [
                    'label' => esc_html__('Content', 'elementor-oembed-widget'),
                    'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'heading',
                [
                    'label'       => __('Heading', 'elementortestplugin'),
                    'type'        => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => __('Hello World', 'elementortestplugin'),
                ]
            );

            $this->add_control(
                'alignment',
                [
                    'label'     => __('Heading Alignment', 'elementortestplugin'),
                    'type'      => \Elementor\Controls_Manager::SELECT,
                    'default'   => 'left',
                    'options'   => [
                        'left'   => __('Left', 'elementortestplugin'),
                        'right'  => __('Right', 'elementortestplugin'),
                        'center' => __('Center', 'elementortestplugin'),
                    ],
                ]

            );

            $this->end_controls_section();

        }

        /**
         * Render oEmbed widget output on the frontend.
         *
         * Written in PHP and used to generate the final HTML.
         *
         * @since 1.0.0
         * @access protected
         */
        protected function render() {

            $settings  = $this->get_settings_for_display();
            $heading   = $settings['heading'];
            $alignment = $settings['alignment'];
            echo "<h2 style='text-align:" . $alignment . "'>" . $heading . "</h2>";
        }

}