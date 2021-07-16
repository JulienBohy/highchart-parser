<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

namespace Highcharts;

    /**
     * Description of ChartType.
     *
     * @author BOJU
     */
    class ChartType
    {
        const SPLINE = 'spline';
        const SCATTER = 'scatter';
        const LINE = 'line';
    }

    class Align
    {
        const LEFT = 'left';
        const RIGHT = 'right';
        const CENTER = 'center';
    }

    class AxisType
    {
        const LOGARITHMIC = 'logarithmic';
    }

    class VerticalAlign
    {
        const TOP = 'top';
        const MIDDLE = 'middle';
        const BOTTOM = 'bottom';
    }

    class TitleStyles
    {
        const FONTSIZE = 'fontSize';
        const COLOR = 'color';
        const FONTWEIGHT = 'fontWeight';
        const TEXTTRANSFORM = 'textTransform';
    }

    class DashStyle
    {
        const SOLID = 'Solid';
        const SHORTDASH = 'ShortDash';
        const SHORTDOT = 'ShortDot';
        const SHORTDASHDOT = 'ShortDashDot';
        const SHORTDASHDOTDOT = 'ShortDashDotDot';
        const DOT = 'Dot';
        const DASH = 'Dash';
        const LONGDASH = 'LongDash';
        const DASHDOT = 'DashDot';
        const LONGDASHDOT = 'LongDashDot';
        const LONGDASHDOTDOT = 'LongDashDotDot';
    }

    class LegendLayout
    {
        const VERTICAL = 'vertical';
        const HORIZONTAL = 'horizontal';
    }

    class plotOptionsType
    {
        const SPLINE = 'spline';
        const SCATTER = 'scatter';
    }

    class Symbol
    {
        const SQUARE = 'square';
        const DIAMOND = 'diamond';
        const CIRCLE = 'circle';
    }

    class serieType
    {
        const POLYGON = 'polygon';
        const SCATTER = 'scatter';
        const LINE = 'line';
        const SPLINE = 'spline';
    }

    class colors
    {
        const DEFAULTCOLORS = ['#e44718', '#009FB1', '#00B16B', '#800080', '#FF8040', '#808080', '#6960EC', '#EFCB1B', '#306754', '#8C001A', '#FAAFBE', '#4B0082', '#000000', '#FF7F50', '#E3319D'];
        const TARGETCOLORS = ['green', 'darkorange', 'red'];
        const LINESCOLORS = ['gray' => '#b3b3b2'];
    }

    class Enabled
    {
        const TRUE = true;
        const FALSE = false;
    }
