#!/usr/bin/env python3

import os, sys
from gevent import Greenlet
from sakura.hub.context import HubContext
from sakura.hub.web.greenlet import web_greenlet
from sakura.hub.daemons.greenlet import daemons_greenlet
from sakura.common.tools import set_unbuffered_stdout, \
                                wait_greenlets

CURDIR = os.path.dirname(os.path.abspath(__file__))

def run(webapp_path):
    # create shared context
    context = HubContext()
    # run greenlets and wait until they end.
    g1 = Greenlet.spawn(daemons_greenlet, context)
    g2 = Greenlet.spawn(web_greenlet, context, webapp_path)
    wait_greenlets(g1,g2)
    print('**out**')

if __name__ == "__main__":
    set_unbuffered_stdout()
    print('Started.')
    if len(sys.argv) == 1:
        webapp_dir = 'basic_webapp'
    else:
        webapp_dir = sys.argv[1]
    webapp_path = CURDIR + '/' + webapp_dir
    run(webapp_path)
